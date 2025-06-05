



<div class="my-3">
    @if (session()->has('successMessage')) 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('successMessage') }}
        </div>
    @endif

    @if (session()->has('errorMessage'))  
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('errorMessage') }}
        </div>
    @endif
</div>




