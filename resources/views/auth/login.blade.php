<x-layout>

    <!-- Contenitore principale centrato -->
    <div class="container py-5">
        <div class="row justify-content-center">
            
            <!-- Colonna responsiva -->
            <div class="col-12 col-md-6 col-lg-5">
                
                <!-- Form con bordi neri, sfondo bianco e ombra -->
                <form action="{{ route('login') }}" method="POST" class="p-4 border border-dark rounded shadow bg-white text-dark">
                    @csrf

                    <!-- Campo Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold text-black">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Inserisci la tua email" required>
                    </div>

                    <!-- Campo Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold text-black">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Inserisci la tua password" required>
                    </div>

                    <!-- Bottone di invio -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-dark btn-lg">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</x-layout>
