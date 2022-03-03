<?php
    $con=mysqli_connect('localhost', 'root','','agenda') or die('Error en la conexion servidor');
    //$fecha = date('H:i:s');
    //echo $fecha;
    date_default_timezone_set("America/Mexico_City");
    $hora= date('H:i:s');
    $fecha= date('Y-m-j');
    echo $fecha;
    echo $hora;
    $newDate=strtotime('+0 hour', strtotime($hora));
    $newDate= strtotime('+15 minute',$newDate);
    $newDate = date('H:i:s',$newDate);
    echo $newDate;
    
    $busqueda="SELECT * FROM citas WHERE Status='Pendiente' ";
    
   
    
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
                    <tr class="jeje">
                        <th >Número</th>
                        <th >Fecha</th>
                        <th>Hora</th>
                        <th>Gerente</th>
                        <th>Nombre del visitante</th>
                        <th>Personas</th>
                        <th>Asunto</th>
                        <th>Status</th>
                    </tr>
                <?php
                    $resultado=mysqli_query($con, $busqueda);
                        while ($row=mysqli_fetch_assoc($resultado)) {  ?>
                            <tr >
                                <th class="je">
                                    <table class ="default">  <?php echo $row["id_cita"]; ?> </table>            
                                </th >
                                <th>
                                    <table class="default">  <?php echo $row["Fecha"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Hora"];?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Gerente"]; ?></table>    
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["NombreVisita"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["NumPersonas"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Asunto"];?></table>
                                </th>
                                <th>
                                    <table class="default">  
                                    <select name="estado" id="" class="opciones">
                                        <option value="" id=""><?php echo $row["Status"]; ?></option>
                                        <option type="submite" id="2">Completada</option>
                                    </select>
                                    </table>
                                <?php
                       
                                 }
                                ?> 
                                </th>
                                <ul class="rellenar">
                                    <form action="ConsultarCita.php" method="GET" >
                               
                                        <input type="text" name="mail" id="mail" value="" class="rell">   
                                        <input type="submit" name="submit" value="Actualizar" class="actuali" href="ConsultarCita.php">
                                        </tr>    
            </table>
                                        <?php
                                
                                            if (isset($_GET["mail"])) {
                                                $valor = $_GET["mail"];
                                                $actua="UPDATE citas SET Status='Completada' WHERE id_cita='$valor'";
                                                mysqli_query($con,$actua);
                                        } ?>
                                    </form> 
                                </ul>
                                                        
        </ul>
    </body>
</html>