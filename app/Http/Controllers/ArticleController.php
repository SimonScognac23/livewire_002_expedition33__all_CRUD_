<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }

    // Qui Laravel usa la Dependency Injection per "iniettare" automaticamente
    // l'istanza di Article corrispondente all'articolo che vogliamo modificare,
    // basandosi sull'ID passato nella route.
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }
}
