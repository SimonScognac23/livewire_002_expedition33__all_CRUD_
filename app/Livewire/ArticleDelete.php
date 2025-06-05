<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleDelete extends Component
{
    // questa classe di livewire avrà a disposizione come attributi
    public $article;

    public function deleteArticle()
    {
        // controllo se l'utente loggato è associato all'articolo? 
        // di questo article l'utente user e l'id dell'utente sono uguali a Auth::id
        // se sì creo una variabile in cui ci salvo il titolo dell'articolo 
        if ($this->article->user->id == Auth::id()) {

            $articleName = $this->article->title;

            // ulteriore controllo ovvero this->article->img è diverso da null?
            // ovvero c'è un'immagine associata a questo articolo? 
            // in questo caso facciamo uno storage delete
            if ($this->article->img != null) {
                Storage::delete($this->article->img);
            }

            $this->article->delete(); // cancelliamo effettivamente l'articolo

            return redirect()->route('homepage')->with('successMessage', 'Articolo "' . $articleName . '" cancellato ');
            // qui richiamo l'articolo, motivo per cui lo abbiamo salvato in articleName

        // se è un utente diverso da quello che ha scritto l'articolo
        } else {
            return redirect()->route('homepage')->with('errorMessage', 'Non sei autorizzato a fare questa operazione');
        }
    }

    public function render()
    {
        return view('livewire.article-delete');
    }
}
