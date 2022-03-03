<?php
    $con=mysqli_connect('localhost', 'root','','agenda') or die('Error en la conexion servidor');
    
    
    $sql="INSERT INTO gerentes VALUES(null,'".$_POST["nombres"]."', '".$_POST["area"]."', 
        '".$_POST["status"]."','".$_POST["correo"]."')";

    if (mysqli_query($con, $sql)) {
        
       
        //alert("Datos guardados");
        header("location:index.html");
        //window.alert("eheh");
       

        
    }else{
        echo"Error: ".$sql."<br>".mysqli_error($con);
    }


    
    mysqli_close($con);
    

?>

<ul class="table">
                    <table class="default">
                        <thead>
                            <tr>
                                <th>Número</th>
                                <th>Nombre del gerente</th>
                                <th>Área</th>
                                <th>Status</th>
                                <th>Correo</th>
                            </tr>
                                <?php
                                $resultado=mysqli_query($con, $busqueda);
                                while ($row=mysqli_fetch_assoc($resultado)) {  ?>

                                   <table class ="table">  <?php echo $row["id_Gerentes"]; ?> </div>
                                   <table class ="table">  <?php echo $row["NombreCompleto"]; ?></div>
                                   <div class="table">  <?php echo $row["Area"];?></div>
                                   <div class="table">  <?php echo $row["Status"]; ?></div>
                                   <div class="table">  <?php echo $row["Correo"]; ?></div>
                                   <?php } mysqli_free_result($resultado);?>
    
  
                            
                        </thead>
                    </table>
                </ul>