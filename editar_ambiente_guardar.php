<?php
include('function.php');
	
if(isset($_POST['submit'])){
    $field = array("no"=>$_POST['no'], "cede"=>$_POST['cede'], "nom_aula"=>$_POST['nom_aula']);
    $tbl = "ambientes";
    edit($tbl,$field,'no',$_POST['id']);
    header("location:c-editar_eliminar_ambientes.php");
}
?>