{{-- Sezione principale container --}}
<div class="container mt-5">

  {{-- Righe per disporre le card --}}
  <div class="row">

    {{-- Ciclo foreach per ogni articolo --}}
    @foreach($articles as $article)
      <div class="col-md-4 mb-4">

        {{-- Card dell'articolo --}}
        <div class="card h-100 shadow-sm custom-article-card">

          {{-- Immagine dell articolo, se non c è uso un placeholder --}}
          <img src="{{ $article->img ? Storage::url($article->img) : 'https://picsum.photos/300' }}" alt="immagine articolo" class="card-img-top rounded-top">

          {{-- Corpo della card --}}
          <div class="card-body bg-white text-black rounded-bottom">

            {{-- Titolo articolo --}}
            <h5 class="card-title">{{ $article->title }}</h5>

            {{-- Sezione pulsanti/modifica --}}
            <div class="row justify-content-around mt-3">

              {{-- Pulsante 'Leggi di più' --}}
              <div class="col-6">
                <a href="{{ route('article.show', compact('article')) }}" class="btn btn-dark w-100">Leggi di più</a>
              </div>

              {{-- Se c'è un utente autenticato allora fai qualcosa --}}
              <div class="col-6">
                @auth 
                  {{-- Se l'ID dell'utente autenticato è uguale a quello associato all'articolo, mostra il link per modificarlo --}}
                  @if (Auth::id() == $article->user->id)
                    <a href="{{ route('article.edit', ['article' => $article->id]) }}" class="btn btn-outline-secondary w-100">Modifica</a>
                  @endif
                @endauth
              </div>

            </div>
          </div>
        </div>

      </div>
    @endforeach

  </div>
</div>
