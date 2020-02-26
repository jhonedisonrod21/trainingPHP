<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function imprimirParrafo($valor){
            echo "<p> $valor</p>"."<br>";
        }
        function imprimirTitulo($valor){
            echo "<h1> $valor</h1>"."<br>";
        }
        function imprimirlink($valor){
            echo "<a> $valor</>"."<br>";
        }
        imprimirTitulo("a ver cual es la joda par de ctre jijueputas");
        imprimirParrafo("pero madre mia willi compañero");
        imprimirlink("http://www.google.com");
    ?>
    
</body>
</html>