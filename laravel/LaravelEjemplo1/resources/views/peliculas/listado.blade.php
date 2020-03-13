<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pelis</title>
</head>
<body>
    <h1>{{$titulo}}</h1>

@if(isset($parametro))
    <h2>bueno socios</h2>
    <h3>el parametro si llego y es</h3>
    <h4>{{$parametro}}</h4>
@endif
</body>
</html>