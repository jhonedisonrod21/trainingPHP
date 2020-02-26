<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de php</title>
</head>

<body>
    <h1>formulario en php</h1>
    <form method="POST" action="recibir.php">
        <p>
            <label>nombre</label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label>apellidos</label>
            <input type="text" name="apellidos">
        </p>
        <input type="submit" value="Enviar datos">
    </form>
</body>

</html>