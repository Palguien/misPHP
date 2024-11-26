<?php
$contenido = file_get_contents("archivo.txt");
echo "Contenido del fichero: $contenido<br>";
$res=file_put_contents("fichero_salida.txt", "Fichero creado con file put_contents");
if($res){
echo "Fichero creado con éxito";
}else{
echo "Error al crear el fichero";
}

echo "Linea actual: " . __LINE__."<br>";
echo "Directorio actual: " . __DIR__."<br>";
echo "Ruta al archivo actual: " . __FILE__."<br>";
?>
