<!-- CONTENITORE MESSAGGI SESSIONE -->
<div class="my-3">
    
    {{-- MESSAGGIO DI SUCCESSO SE PRESENTE --}}
    @if (session()->has('successMessage')) 
        {{-- if per il controllo se c'è una sessione di nome successMessage allora creami un div --}}
        <div class="alert alert-success">
            {{ session('successMessage') }} 
            {{-- richiamiamo all'interno il nome della sessione --}}
        </div>
    @endif

    {{-- MESSAGGIO DI ERRORE SE PRESENTE --}}
    @if (session()->has('errorMessage'))  
        {{-- if per il controllo se c'è una sessione di nome errorMessage allora creami un div --}}
        <div class="alert alert-danger">
            {{ session('errorMessage') }} 
            {{-- richiamiamo all'interno il nome della sessione --}}
        </div>
    @endif

</div>
