<div class="row nba-form-section ">
    <div class="col-12 col-md-10 col-lg-8 mx-auto p-4 shadow rounded bg-white">

        <!-- Inizio form -->
        <form class="nba-form" enctype="multipart/form-data" wire:submit.prevent="articleUpdate">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- CAMPO TITOLO -->
            <div class="mb-3">
                <label for="title" class="form-label fw-bold text-primary">Titolo</label>
                <input 
                    wire:model.blur="title"
                    name="title" 
                    value="{{ old('title') }}"
                    type="text" 
                    class="form-control border-primary"
                    id="title"
                    placeholder="Inserisci il titolo"
                >     
            </div>

            <!-- CAMPO DESCRIZIONE -->
            <div class="mb-3">
                <label for="body" class="form-label fw-bold text-primary">Descrizione</label>
                <textarea 
                    wire:model.blur="body"
                    name="body" 
                    cols="30"
                    rows="4"
                    class="form-control border-primary" 
                    id="body"
                    placeholder="Inserisci la descrizione"
                ></textarea> 
            </div>

            <!-- CAMPO IMG -->
            <!-- Questo articolo ha un'immagine associata? se sì allora fai qualcosa.. -->
            <div class="mb-3 text-center">
                @if ($article->img)
                    <p class="h5">Vecchia immagine:</p>
                    <img class="img-fluid rounded" style="max-height: 300px;" src="{{ Storage::url($article->img) }}" alt="Immagine di {{ $article->title }}">
                @else
                    <p class="text-center">L'articolo non ha immagini associate</p>
                @endif                
            </div>

            <!-- CAMPO IMG -->
            <div class="mb-3">
                <label for="img" class="form-label fw-bold text-primary">Modifica</label>
                <input 
                    wire:model="img"  
                    id="img"              
                    type="file" 
                    name="img"
                    class="form-control border-primary"           
                >                 
            </div>

            {{-- 
                Div sotto i campi input che controllano se ci sono errori.
                Ovviamente devo valorizzarli con la direttiva @error, 
                un po’ simile alla validation error di Laravel. 
            --}}

            <!-- BOTTONE INVIO -->
            <button type="submit" class="btn btn-dark text-white w-100 fw-bold">
                Invia dati
            </button>
        </form>
        <!-- Fine form -->
    </div>
</div>
