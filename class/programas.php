<?php
include ('conexion.php');

class insertar_programa extends Conex
{

    static function insertar ($ficha, $nom_programa, $no_documento)
        {
            $p = explode (" ",$no_documento);
            $conexion = Conex::conectar();
            $sql= " insert into programas (ficha, nom_programa, No_documento) values ('$ficha', '$nom_programa', '$p[0]')";
            $resultado = $conexion->query($sql);
            //echo $sql;
            if ($conexion ->affected_rows > 0)
            {
                
                echo '<script language="javascript">alert("tus datos se guardaron");window.location.href="c-menu-programa.php";</script>';
            }
            else
            {
                echo '<script language="javascript">alert("tus datos no se guardaron");window.location.href="c-menu-programa.php";</script>';
                
                
            }
        }
}