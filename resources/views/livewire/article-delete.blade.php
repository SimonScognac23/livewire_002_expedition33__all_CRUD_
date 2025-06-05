<form wire:submit.prevent="deleteArticle">
    <button type="submit" class="btn-delete">
        Cancella articolo
    </button>
</form>



{{-- Usiamo wire per associare la funzione deleteArticle e passiamo l'articolo tramite la sintassi Blade --}}
