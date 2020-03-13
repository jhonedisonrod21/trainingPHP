<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>peliculas de marvel</h1>
    <h2>la variable que llego tiene el valor de:  <?=$manolo?></h2>
    <h3>{{$manolo}}</h3>
    <h3>{!!date('d-y-m')!!}</h3>
    <a href=""></a>
    <!-- esto es un comentario html -->  
    {{--esto es un comentario de blade--}}  

    <h1>condicion  <?= isset($parametro)? $parametro:'F no hay parametro'?></h1>  <!-- esta es la condicion clasica de php-->
    <h1>condicion  {{$parametro or 'F no hay parametro'}}</h1> {{--esta es la condicion hecha con blade--}}

    {{--condicionales de blade--}}
    {{--if--}}
    @if($titulo)
        <h2>ELTITULO EXISTE Y ES :{{$titulo}}</h2>
    @elseif(true)
        <h3>sdcsdbcjhsdbcjsdvcj</h3>
    @else
        <h2>el titulo no existe</h2>
    @endif

    {{--bucles con blade que es un gestor de vistas--}}

    @for($i=0;$i<=10;$i++)
        <a href="/">numero {{$i}}</a> <br>  
    @endfor
    <?php $counter = 0; ?>
    @while($counter < 5)
        <a href="/">uribe parco hpta</a> <br> 
        <?php $counter++?>
    @endwhile

    {{--@foreach($array  as $item)       @endforeach--}}



    

</body>
</html>



