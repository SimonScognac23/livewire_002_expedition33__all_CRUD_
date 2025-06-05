
// Aspetto che il DOM sia completamente caricato prima di eseguire il codice
document.addEventListener('DOMContentLoaded', function () {

    // Seleziono tutti gli elementi con la classe 'alert' (i messaggi flash)
    const alerts = document.querySelectorAll('.alert');

    // Per ogni alert trovato
    alerts.forEach(alert => {

        // Imposto un timer di 5 secondi (5000 ms)
        setTimeout(() => {

            // Rimuovo la classe 'show' di Bootstrap per far partire la transizione di fade out
            alert.classList.remove('show');

            // Aggiungo la classe 'hide' (puoi gestirla nel CSS per nascondere gradualmente)
            alert.classList.add('hide');

            // Dopo 500 ms (tempo della transizione), imposto display:none per nascondere completamente l'elemento
            setTimeout(() => alert.style.display = 'none', 500);

        }, 5000);  // attendo 5 secondi prima di eseguire la rimozione
    });
});

