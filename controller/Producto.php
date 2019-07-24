<?php
$ruta="./imagenes/";//ruta carpeta donde queremos copiar las imágenes 
$uploadfile_temporal=$_FILES['fichero']['tmp_name']; 
$uploadfile_nombre=$ruta.$_FILES['fichero']['name']; 

if (is_uploaded_file($uploadfile_temporal)) 
{ 
    move_uploaded_file($uploadfile_temporal,$uploadfile_nombre); 
} 
else 
{ 
echo "error"; 
} 
$directorio=opendir("imagenes/"); 
while($ficheros=readdir($directorio)) 
{ 
    $url="imagenes/".$ficheros; 
    echo "<img src=".$url.">"; 
} 
?>







