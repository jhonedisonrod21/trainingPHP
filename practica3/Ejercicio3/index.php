<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
    <form action="">
        <label for="val1">Valor 1</label>
        <input type="number" name="val1" value = '0'><br>
        <label for="val2">Valor 2</label>
        <input type="number" name="val2" value = '0'><br>
        <input type="submit" name='op' value="+">
        <input type="submit" name='op' value="-">
        <input type="submit" name='op' value="*">
        <input type="submit" name='op' value="/">
    </form>    
<?php
    $result = 0;
    if(isset($_GET['val1']) && isset($_GET['val2'])){
        switch ($_GET['op']) {
            case '+': 
                $result = $_GET['val1']+$_GET['val2'];             
                break; 
            case '-':  
                $result = $_GET['val1']-$_GET['val2'];            
                break;
            case '*':  
                $result = $_GET['val1']*$_GET['val2'];            
                break;
            case '/':   
                $result = $_GET['val1']/$_GET['val2'];           
                break;           
        }
    }
    echo "<h1>El resulado de la operacion es: $result </h1>"
?>  
</body>
</html>


