<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire</title>


        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

</head>
<body>

   <x-navbar></x-navbar> 

        {{ $slot }}
        @livewireScripts
    
</body>
</html>