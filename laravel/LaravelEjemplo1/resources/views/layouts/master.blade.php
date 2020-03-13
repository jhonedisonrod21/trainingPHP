<!DOCTYPE html>
<html lang="ess">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    @section('header')  
        <nav>
            <button>el boton que va en el header dentro de un navvar</button>
        </nav>
    @show
    <div class="container">
        @yield('content')    
    </div>
    @section('footer')
        pie de pagina
    @show
</body>
</html>