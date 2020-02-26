<?php
$error = "faltan datos";
console_log("holaaaa");
if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['correo']) && !empty($_POST['pass'])) {
    $error = "ok";
    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    

    // validadndo variables 
    //nombre
    if (!is_string($nombre) || !preg_match("/[a-zA-Z ]+/", $nombre)) {
        $error = "nombre";
        header("location:index.php?error=$error");
    }
    //apellidos
    if (!is_string($apellidos) || !preg_match("/[a-zA-Z ]+/", $apellidos)) {
        $error = "apellidos";
        header("location:index.php?error=$error");
    }
    //edad
    if (!is_int($edad) || filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = "edad";
        header("location:index.php?error=$error");
    }
    //email
    if (!is_string($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "correo";
        header("location:index.php?error=$error");
    }
    //pasword
    if (!is_string($pass) || strlen(5) > 5) {
        $error = "password";
        header("location:index.php?error=$error");
    }    
} else {
    header("location:index.php?error=$error");
}


function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($error = "ok") : ?>
        <h1>datos validados correctamente</h1>
        <p><?= $nombre ?></p>
        <p><?= $nombre ?></p>
        <p><?= $nombre ?></p>
        <p><?= $nombre ?></p>
    <?php endif; ?>

</body>

</html>