<x-layout>  

    {{-- Sezione fullscreen con sfondo grigio chiaro --}}
    <div class="container-fluid bg-body-secondary vh-100 p-0 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-12 text-center">

                {{-- Immagine grande e centrata --}}
                <div class="image-container p-3">
                    <img 
                        src="https://static1.srcdn.com/wordpress/wp-content/uploads/2025/04/clair-obscur-esquie-with-the-crew-in-baguette-outfits.jpg?q=70&fit=crop&w=1140&h=&dpr=1" 
                        alt="Descrizione immagine" 
                        class="img-fluid w-100 custom-image"
                    >
                </div>

            </div>
        </div>
    </div>

    {{-- Sezione contenuti con margine verticale --}}
    <div class="container my-5">

        {{-- Flash message --}}
        <div class="row justify-content-center">
            <div class="col-12">
                <x-flash-messages />
            </div>
        </div>

        {{-- Livewire: elenco articoli --}}
        <div class="row">
            <div class="col-12">
                <livewire:article-index />
            </div>
        </div>
        
    </div>

</x-layout>
