Italiano
In questo progetto ho implementato un sistema CRUD completo per la gestione degli articoli utilizzando Laravel con Livewire e Fortify per l’autenticazione. Ho creato rotte dedicate per la visualizzazione, creazione, modifica e cancellazione degli articoli, integrando la logica direttamente nei componenti Livewire per garantire un’esperienza utente fluida e reattiva senza ricaricare la pagina.

Nello specifico, ho gestito:

La creazione degli articoli con un form dinamico che utilizza wire:submit.prevent per inviare i dati in modo asincrono, sincronizzando i campi del form con gli attributi del componente Livewire tramite wire:model.

La modifica degli articoli, permettendo anche l’upload e la sostituzione delle immagini associate, con una visualizzazione dell’immagine precedente per maggiore chiarezza all’utente.

La cancellazione degli articoli tramite un form dedicato, anch’esso gestito con Livewire, assicurando la sicurezza dell’operazione tramite il middleware di autenticazione.

La visualizzazione di una lista di articoli con card responsive e azioni condizionate, come la possibilità di modificare solo gli articoli creati dall’utente autenticato.

L’utilizzo di Livewire mi ha permesso di mantenere il codice backend pulito e modulare, facilitando la gestione dello stato dell’applicazione e le interazioni complesse senza dover scrivere JavaScript manualmente. L’integrazione con Fortify garantisce che solo utenti autenticati possano creare, modificare o eliminare contenuti, migliorando la sicurezza complessiva dell’applicazione.

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


English
In this project, I implemented a full CRUD system for managing articles using Laravel with Livewire and Fortify for authentication. I created dedicated routes for viewing, creating, editing, and deleting articles, integrating the logic directly into Livewire components to ensure a smooth and reactive user experience without page reloads.

Specifically, I handled:

Article creation with a dynamic form using wire:submit.prevent to asynchronously submit data, synchronizing form fields with Livewire component attributes via wire:model.

Article editing, allowing image upload and replacement, including displaying the previous image for user clarity.

Article deletion through a dedicated form, also managed with Livewire, ensuring operation security through authentication middleware.

Displaying a responsive list of articles with cards and conditional actions, such as allowing edits only for articles created by the authenticated user.

Using Livewire allowed me to keep the backend code clean and modular, simplifying state management and complex interactions without writing manual JavaScript. Integration with Fortify ensures that only authenticated users can create, edit, or delete content, enhancing the overall security of the application.
