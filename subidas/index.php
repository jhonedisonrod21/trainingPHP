<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subiendo archivos con php</title>
</head>
<body>
        <h1>subiendo archivos</h1>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <input type="file" name="archivo" accept="image/*"><br/>
            <input type="submit" value="Enviar">
        </form> 

        <h1>listado de las imagenes subidas</h1>   
        <?php
            $gestor = opendir("./images") or die("no se pudo abrir el directorio");                      
            if ($gestor) {                
               while (($image = readdir($gestor)) !== false) {
                   if($image != '.' && $image != '..'){                       
                    echo "<img src = 'images/$image' width = '400px' height = '200px'/> <hr/>";                    
                   }
               }
            }

        ?>
</body>
</html>