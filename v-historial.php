<html>

<head>


<title></title>



</head>

<body>

        <div class="header">
		<ul class="nav">
			<li><a href="c-menu.php">Inicio</a></li>
			<li><a href="c-historial.php">Realizar otra Busqueda</a></li>
		</ul>
	</div> 
       <br>
	<form action="c-historial.php" method="POST">
             
                  <div class="field" id="buscar">
                        <input type="text" id="buscar" name= "buscar" placeholder="Buscar Registro"/>
                  </div>
            
      </form> 
       <div class="container">
            <div>
                  
                   <table class="table" >

                        <thead><br>
                              <th>No</th>
                              <th>Id</th>
                              <th>Fecha Registro</th>
                              <th>Cede</th>
                              <th>Hora Ingreso</th>
                              <th>Hora Salida</th> 
                              <th>Observaciones</th>
                              <th>Fecha prestamo</th>
                              <th>Fecha devolucion</th>
                        </thead>
                        <tbody>
                        <?php
                              include "v-busqueda.php";
                              while($row= mysqli_fetch_array($sql_query)){?>
                              <tr>
                              <td data-label="No:"><?=$row['no'] ?></td>
                              <td data-label="Id:"><?=$row['id']?></td>
                              <td data-label="Fecha Registro:"><?=$row['fecha_registro']?></td>
                              <td data-label="Cede:"><?=$row['cede']?></td>
                              <td data-label="Hora Ingreso:"><?=$row['hora_ingreso']?></td>
                              <td data-label="Hora Salida:"><?=$row['hora_salida']?></td>
                              <td data-label="Observaciones:"><?=$row['observaciones']?></td>
                              <td data-label="Fecha prestamo:"><?=$row['fecha_prestamo']?></td>
                              <td data-label="Fecha devolucion:"><?=$row['fecha_devolucion']?></td>
                              </tr>
                              <?php }?>
                        </tbody>
                  </table>
                  
                  <div class = "bs">
                        <form action="">
                              <INPUT TYPE="SUBMIT" value="Generar PDF" name=buscar onClick="window.open('pdf.php?id=<?php echo $buscar?> '); ">
                        </form>
                  </div>                  
            </div> 
      </div> 


</body>
</html>

