<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg py-3">
    <div class="container-fluid">
        <!-- Logo o Brand -->
        <a class="navbar-brand fw-bold text-uppercase ms-3" href="">
            <span class="text-danger">My</span>Blog
        </a>

        <!-- Pulsante per il menu mobile (toggle) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu di navigazione -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto custom-nav-list">  {{-- mx-auto centra la lista orizzontalmente --}}

                <!-- Link alla Home page -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">
                        Home
                    </a>
                </li>

                <!-- Se l'utente NON è autenticato -->
                @guest
                    <!-- Link Registrati -->
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="{{ route('register') }}">
                            Registrati
                        </a>
                    </li>

                    <!-- Link Accedi -->
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="{{ route('login') }}">
                            Accedi
                        </a>
                    </li>
                @endguest

                <!-- Se l'utente È autenticato -->
                @auth
                    <!-- Messaggio di Benvenuto e Logout -->
                    <li class="nav-item d-flex flex-column align-items-center"> {{-- centro contenuti verticalmente --}}


                        <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-flex flex-column align-items-center">
                            @csrf

                   <!-- Messaggio di benvenuto -->
                        <a class="nav-link custom-welcome" href="#">
                            Benvenuto
                        </a>


                            <button type="button" onclick="event.preventDefault(); document.getElementById('form-logout').submit();" 
                                    class="btn btn-outline-light btn-sm mt-2">
                                Logout
                            </button>
                        </form>

                    </li>

                    <!-- Link per creare un nuovo articolo -->
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('article.create') }}">Crea Articolo</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
