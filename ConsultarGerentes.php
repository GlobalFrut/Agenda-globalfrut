<?php
     $con=mysqli_connect('localhost', 'root','','agenda') or die('Error en la conexion servidor');
     $busqueda="SELECT *FROM gerentes";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Gerentes</title>
        <link rel="stylesheet" type="text/css" href="estilos2.css">
    </head>
    <body>
        <ul class="menu">
            <li><a href="index.html"><b>Inicio</b></a></li>
        </ul>
            <ul class="table">
                <table class="default">
                    <thead>
                        <tr>
                            <th>Número</th>
                            <th>Nombre del gerente</th>
                            <th>Área</th>
                            <th>Correo</th>
                            <th>Status</th>
                        </tr> 
                 
                         <?php
                            $resultado=mysqli_query($con, $busqueda);
                            while ($row=mysqli_fetch_assoc($resultado)) {  ?>
                                <tr>
                                    <th>
                                        <table class ="default">  <?php echo $row["id_Gerentes"]; ?> </table>                                               
                                    </th>
                                    <th>
                                        <table class="default">  <?php echo $row["NombreCompleto"]; ?></table>
                                    </th>
                                    <th>
                                        <table class="default">  <?php echo $row["Area"];?></table>
                                    </th>
                                    <th>
                                        <table class="default">  <?php echo $row["Correo"]; ?></table>    
                                    </th>
                                    <th>
                                        <table class="default">  <?php echo $row["Status"]; ?></table>
                                    </th>
                                </tr>                                    
                            <?php } mysqli_free_result($resultado);?> 

                    </thead> 
                </table>
            </ul>
            <button clase="botons" type="submite">Editar</button>
            <button clase="botons" type="submite">Eliminar</button>
    </body>
</html>