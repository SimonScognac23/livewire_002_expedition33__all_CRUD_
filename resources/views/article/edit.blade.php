<x-layout>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-2 fw-bold pt-5 pb-4 text-white">
                    Modifica un articolo
                </h1>
            </div>
        </div>
    </div>

    <div class="row justify-content-center align-items-center min-vh-75 bg-whisper">
        <div class="col-12 col-md-8 col-lg-6">
            <livewire:article-edit :article="$article" />
        </div>
    </div>
</x-layout>


{{-- in article-edit dobbiamo passare l'articolo affinche possa vedere l'articolo gia compilato, quindi userò : article... --}}