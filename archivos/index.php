<?php
//  abiendo archivos
$abrir_archivo = fopen("./texto.txt", "r+");

// leer el contenido del archivo
while (!feof($abrir_archivo)) {
    $contenido_archivo = fgets($abrir_archivo);
    echo $contenido_archivo . '<br>';
}
// escribir en el archivo
fwrite($abrir_archivo,"eeeeeeosaafasfafasfasfasfas") or die("error al escribir");
//cerrando el archivo
fclose($abrir_archivo);

//copy('texto.txt','copia.txt') or die("error al copiar");
//rename('copia.txt','ahhhhperrotraeselomnitrix.txt') or die("error al renombrar");
unlink('copia.txt') or die("error al eliminar");
if(file_exists('texto.txt')){
    #codigooo
}

//////////////////////trabajando con directorios//////////////////////////

mkdir('nombre_carpeta',0777) or die("no se puede crear la carpeta");

if (!is_dir('nombre_carpeta')) {
   
}else{
    echo 'la carpeta ya existe';
}
?>

