<?php 
$to = $_GET['correo'];
include("conexion.php");
$conexion = Conex::conectar();
$sql= " SELECT clave FROM `usuario` WHERE correo='$to'";
//echo $sql;t
$resultado = $conexion->query( $sql );
if ($fila = mysqli_fetch_array($resultado))
{
    $to = $_GET['correo'];
    $subject = "Contraseña";
    $message = "La contraseña de su cuenta TIPKEY es ". $fila[ 'clave'] ;
    $headers = "From: tipkeysena@gmail.com" . "\r\n" . "CC: tipkeysena@gmail.com";
    //echo $row['clave'];
    $r =mail($to, $subject, $message, $headers);
    if ($r){
        echo "<h1>Correo enviado a:" . $_GET['correo'] . "</h1>";
    }else{
        echo "<h1>No se pudo enviar el correoa: " . $_GET['correo'] . "</h1>";
    }

}else
{
    echo '<script language="javascript">alert("el correo no esta registrado ");window.location.href="index.php";</script>';
}

?>