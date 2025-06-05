<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 text-center">
                <h1 class="display-4 text-black">
                    Dettaglio articolo: {{ $article->title }}
                </h1>
                <p class="lead mt-3 text-black">
                    {{ $article->body }}
                </p>
                <p class="text-muted">
                    Scritto da {{ $article->user->name }}
                </p>

                <img 
                    src="{{ $article->img ? Storage::url($article->img) : 'https://picsum.photos/600' }}" 
                    alt="Immagine dell'articolo {{ $article->title }}" 
                    class="img-fluid rounded mt-4"
                >
            </div>
        </div>

        @auth
            @if (Auth::id() == $article->user->id)
                <div class="row justify-content-around mt-5">
                    <div class="col-12 col-md-5 mb-3">
                        {{-- Componente Livewire per cancellare l'articolo --}}
                        <div class="d-grid">
                            <livewire:article-delete :article="$article" />
                        </div>
                    </div>
                    <div class="col-12 col-md-5 mb-3 text-center">
                        {{-- Pulsante per modificare l'articolo --}}
                        <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-warning text-black w-100">
                            Modifica articolo
                        </a>
                    </div>
                </div>
            @endif
        @endauth
    </div>

    {{-- 
        La condizione controlla che l'id dell'utente loggato sia uguale 
        all'id dell'utente associato all'articolo. In tal caso:
        - viene mostrato il componente Livewire per la cancellazione
        - viene mostrato il pulsante per modificare l'articolo
        Per creare il componente Livewire:
        php artisan make:livewire ArticleDelete 
    --}}
</x-layout>
