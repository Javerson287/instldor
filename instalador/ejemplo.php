<?php

$servidor = $_GET['servidor'];
$usuario = $_GET['usuario'];
$clave = $_GET['contrasena'];
$bd = $_GET['bd'];


$co = @mysqli_connect($servidor,$usuario , $clave, $bd);
if(!$co)
{
echo 'error: ' . mysqli_connect_error();
}else

{
    $archivo = fopen('../class/conexion.php', 'w');

$lines[] = "<?php\n";
$lines[] = "\n class Conex\n";
$lines[] = "\n {\n";
$lines[] = "\t static function conectar()";
$lines[] = "\n { \n";
$lines[] = "\t return mysqli_connect('$servidor', '$usuario', '$clave', '$bd');";
$lines[] = "\n } \n";
$lines[] = "\n } \n"; 
$lines[] = "\n?>";

foreach($lines as $linea){

fputs($archivo,$linea);
}
}




?>