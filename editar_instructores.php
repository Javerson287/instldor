<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="css/estilo2.css" rel="stylesheet">

</head>

<body>
<div class="main-wrapper">
<h1>Editar Registros  </h1>
<br><br>
<?php 
include("function.php");
$id = $_GET['id'];
select_id('instructores','No_documento',$id);
?>
<form action="editar_instructor_guardar.php" method="post">
	<input type="text" value="<?php echo $row->No_documento;?>" name="No_documento">
	<input type="text" value="<?php echo $row->nom_instructor;?>" name="nom_instructor">
	<select name="ambiente">
        <?php
            //se realiza la conexion con la base de datos
            include('class/conexion.php');
            $conexion = Conex::conectar();
            $sql = "select no, cede, nom_aula from ambientes";
            $resultado = $conexion->query($sql);
            //se crea l alista de los ambientes
            while($fila = mysqli_fetch_array($resultado) )
            {
                $ambiente = $fila[ 'no'];
                $ambiente .= "  ";
                $ambiente .= $fila[ 'cede'];
                $ambiente .= "  ";
                $ambiente .= $fila[ 'nom_aula'];
                echo "<option values =' $ambiente'>  $ambiente </option>";
            }
           
            
        ?>
    </select>
	<input type="hidden" value="<?php echo $id;?>" name="id">
	<input type="submit" name="submit">
</form>


</div>
</body>
</html>