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
select_id('programas','ficha',$id);
?>
<form action="editar_programas_guardar.php" method="post">
	<input type="text" value="<?php echo $row->ficha;?>" name="ficha">
	<input type="text" value="<?php echo $row->nom_programa;?>" name="nom_programa">

	<select  name="instructor" >
        <?php
            //se realiza la conexion con la base de datos
            include('class/conexion.php');
            $conexion = Conex::conectar();
            
            $sql = "select No_documento, nom_instructor from instructores ORDER BY No_documento= $row->No_documento DESC";
            echo $sql;
            $resultado = $conexion->query($sql);
            //se crea l alista de los ambientes
			
            while($fila = mysqli_fetch_array($resultado) )
            {
                $instructor = $fila[ 'No_documento'];
                $instructor .= "  ";
                $instructor .= $fila[ 'nom_instructor'];
                echo "<option values =' $instructor'>  $instructor </option>";
            }
            
        ?>
    </select>
    <input type="hidden" value="<?php echo $id;?>" name="id">
	<input type="submit" name="submit">
</form>


</div>
</body>
</html>