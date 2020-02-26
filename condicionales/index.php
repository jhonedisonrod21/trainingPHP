<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // haciendo condicionales
    $manolo = "manoloooo";
    if ($manolo == "jose") {
        echo '<h3>se llama jose</h3>';
    } else if ($manolo == 'manolo') {
        echo '<h3>se llama manolo</h3>';
    }

    echo '<br>';

    switch ($manolo) {
        case 'manolo':
            echo '<h3>se llama manolo</h3>';
            break;

        default:
            echo '<h3>no se llama manolo</h3>';
            break;
    }

    $resultado = '<p>el numero es primo</p>';
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        for ($i = 2; $i < $numero; $i++) {
            if ((int) $numero % $i == 0) {
                $resultado = '<p>el numero no es primo</p>';
                break;
            }
        }
        echo $resultado;
    } else {
        echo '<h2> no se esta colocando un numero</h2>';
    }


    ?>
</body>

</html>