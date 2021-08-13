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
select_id('ambientes','no',$id);
?>
<form action="editar_ambiente_guardar.php" method="post">
	<input type="text" value="<?php echo $row->no;?>" name="no">
	<input type="text" value="<?php echo $row->cede;?>" name="cede">
	<input type="text" value="<?php echo $row->nom_aula;?>" name="nom_aula">
	<input type="hidden" value="<?php echo $id;?>" name="id">
	<input type="submit" name="submit">
</form>


</div>
</body>
</html>