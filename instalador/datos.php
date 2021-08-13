<?php

$sql = file_get_contents('proyecto.sql');

//$mysqli = new mysqli("localhost", "root", "", "noe");

/* execute multi query */
->multi_query($sql);

