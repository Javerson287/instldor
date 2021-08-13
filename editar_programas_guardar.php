<?php
	include('function.php');
	if(isset($_POST['submit'])){
	    $p = explode (" ",$_POST['instructor']);
		$field = array("ficha"=>$_POST['ficha'], "nom_programa"=>$_POST['nom_programa'], "No_documento"=>$p[0]);
		$tbl = "programas";
		edit($tbl,$field,'ficha',$_POST['id']);
		header("location:c-editar_eliminar_programas.php");
	}
?>