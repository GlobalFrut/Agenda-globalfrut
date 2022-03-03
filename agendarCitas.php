<?php
    $con=mysqli_connect('localhost', 'root','','agenda') or die('Error en la conexion servidor');
    $sql="INSERT INTO citas VALUES(null,'".$_POST["Gerentes"]."','".$_POST["Fecha"]."', 
        '".$_POST["Hora"]."','".$_POST["Visita"]."','".$_POST["Asunto"]."','".$_POST["Personas"]."','".$_POST["Status"]."')";

  
    if (mysqli_query($con, $sql)) {
        header("location:ConsultarCita.php");
        
        
        
    }else{
        echo"Error: ".$sql."<br>".mysqli_error($con);
    }
   
    mysqli_close($con);
    
   /* if (isset($_POST['enviar'])) {
        
        $asunto="";
        $mensjae="";
        $email="SELECT Correo FROM gerentes WHERE NombreCompleto=$_POST['Gerentes']";
        mysqli_query($con,$email);
        echo $email;
    }
   */ 
    
?>