<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones de formularios PHP</title>
</head>

<body>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == "faltan datos") {
            echo '<strong style="color:red;">introduce todos loc campos para continuar</strong>';
        }
        if ($error == "nombre") {
            echo '<strong style="color:red;">introduce un nombre correcto para continuar</strong>';
        }
        if ($error == "apellidos") {
            echo '<strong style="color:red;">introduce apellidos correctos  para continuar</strong>';
        }
        if ($error == "correo") {
            echo '<strong style="color:red;">introduce un correo  correo correcto para continuar para continuar</strong>';
        }
        if ($error == "pasword") {
            echo '<strong style="color:red;">introduce todos loc campos para continuar</strong>';
        }

    }
    ?>
    <H1>validar formularios en Php</H1>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre</label>a
        <input type="text" name="nombre" required='required' pattern="[A-Za-z]+"><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" required='required' pattern="[A-Za-z]+"><br>
        <label for="edad">Edad</label>
        <input type="number" name="edad" required="required"><br>
        <label for="email">Correo</label>
        <input type="email" name="email" required="required"><br>
        <label for="password">Contraseña</label>       
        <input type="password" name="password" s><br>
        <input type="submit" value="Enviar" minlength="5"><br>
    </form>s

</body>

</html>