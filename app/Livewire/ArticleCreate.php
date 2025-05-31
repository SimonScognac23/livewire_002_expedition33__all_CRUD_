<?php

namespace App\Livewire;
use Livewire\WithFileUploads;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;


class ArticleCreate extends Component

    // Questo componente di Livewire serve per immagazinare dei dati nel db

{

     use WithFileUploads;

    
    public $title;
    public $body;
    public $user_id;
    public $img;

    protected $rules = [
        'title' => 'required',
        'body'  => 'required',
        'img' => 'nullable|image|max:2048',
    ];

    //*.required il protected vale per ogni singolo campo sia di body,title

    protected $messages = [
        '*.required' => 'Il campo :attribute è obbligatorio'
    ];



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function articleStore()
    {

        $this->user_id = Auth::user()->id;       
        //Associo l'attributo pubblico user_id a l'id dell'utente autenticato

        if ($this->img) {         
            //L'utente sta inserendo un immagine?

            $this->validate(['img' => 'image']);  
            //Se si, allora img oltre che ad essere stato inserito deve essere appunto di tipo image

        } else {
            $this->validate();   
            // Faccio partire le regole impostate precedentemente
        } 



        //Creo un nuovo oggetto di classe Article
        //Richiamo la classe Article con il metodo create

        $this->article = Article::create([
            'title'   => $this->title,
            'body'    => $this->body,
            'user_id' => $this->user_id,

          

            'img'     => !$this->img ? null : $this->img->store('img', 'public')
            //Se non è stata inserita un immagine allora '?'  metteremo nel DB null, infatti durante la migrazione abbiamo reso questo campo nullable
            // alternativamente ':' se l'utente ha inserito un immagine la salveremo nello storage richiamando il $this->img e concateno il metodo store specificando dove verra salvata 
            // verra salvata nella cartella public  e nella sottocartella che si andra a creare  che si chiama img
        ]);

        return redirect()->route('homepage')->with('successMessage', 'Articolo creato');
    }



    public function render()

    {
        return view('livewire.article-create');
    }
    

}




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////