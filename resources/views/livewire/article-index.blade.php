<div class="container mt-5">
  <div class="row">
    @foreach($articles as $article)
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
         <img src="{{ $article->img ? Storage::url($article->img) : 'https://picsum.photos/200/300' }}" class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">

          <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <a href="#" class="btn btn-primary mt-2">Leggi di più</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
