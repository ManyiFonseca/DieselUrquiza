<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','Diesel.Urquiza')</title>
     @vite('resources/css/app.css')
</head>
<body>
    <header>
     {{-- Navbar --}}
     @include('layouts.navbar')
     <div class="text-end text-md text-white-100 mx-6">
        Bienvenido a Nuestra Tienda!
     </div>
    </header>
<main>
    <div class="bg-blue-100 my-4 text-center">
          <h1 class="text-1g font-semibold m-4 uppercase">@yield('cabecera')</h1>
    </div>
   @yield('contenido')
</main>
    <footer class="footer items-center p-4 bg-neutral text-neutral-content">
      @include('layouts.footer')
    </footer>
</body>
</html>