<div class="row nba-form-section mt-5">
    <div class="col-12 col-md-8 col-lg-6 mx-auto p-4 shadow rounded bg-white">

        {{-- 
            FORM 
            Assegniamo al form un comportamento di submit tramite wire:submit.
            Al posto della classica action che richiama una rotta, utilizziamo wire:submit,
            che collega il form a una funzione (in questo caso articleStore) nel componente Livewire.

            La direttiva wire:model viene utilizzata per associare un tag input a un attributo pubblico
            del componente Livewire. Quando l’utente inserisce un valore nell’input, Livewire lo sincronizza 
            con l’attributo specificato nel file CreateArticle.php.
        --}}

        <!-- Inizio form -->
        <form class="nba-form" enctype="multipart/form-data" wire:submit.prevent="articleStore">
            {{-- wire:submit fa scattare la funzione store al submit del form --}}
            {{-- Con wire:model colleghiamo gli input agli attributi Livewire --}}
            {{-- wire:submit.prevent="articleStore" → articleStore è il nome della funzione --}}

            {{-- 
                Qui sto gestendo eventuali errori di validazione.
                any è un metodo che dice: "se c'è qualunque errore allora fai qualcosa",
                e in questo caso creo un div.
                @foreach ($errors->all() as $error) crea per ogni errore un list item con il messaggio.
            --}}
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
            <div class="mb-3">
                <label for="img" class="form-label fw-bold text-primary">Inserisci un'immagine:</label>
                <input 
                    wire:model="img"                
                    type="file" 
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
