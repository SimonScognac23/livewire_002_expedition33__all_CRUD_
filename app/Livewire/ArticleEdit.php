<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ArticleEdit extends Component
{
    use WithFileUploads;

    public $article;
    public $title;
    public $body;
    public $img;
    public $old_img;

    public function articleUpdate()
    {
        $this->article->update([
            'title' => $this->title,
            'body' => $this->body
        ]);

        // Da questo articolo faremo partire il metodo update
        // ora facciamo un controllo in cui controllo se l'utente sta inserendo una nuova immagine,
        // in quel caso dovremmo fare l'update di img e usare il metodo store per salvare la nuova immagine
        if ($this->img) {
            $this->article->update([
                'img' => $this->img->store('img', 'public')
            ]);

            // Se a questo articolo associato c'è una vecchia immagine, la cancelliamo dallo storage
            if ($this->old_img) {
                Storage::delete($this->old_img);
            }
            $this->reset('img');
        }

        return redirect()->route('homepage')->with('successMessage', 'Articolo aggiornato');
    }

    // Richiamo un metodo di Livewire mount specifico che dati voglio visualizzare subito al caricamento della pagina
    public function mount()
    {
        $this->title = $this->article->title;   // title sarà uguale al title associato all'articolo 
        $this->body = $this->article->body;
        $this->old_img = $this->article->img;   // old_img sostituirà img
    }

    public function render()
    {
        return view('livewire.article-edit');
    }
}

// Richiamiamo il componente di livewire nella pagina edit.blade.php
