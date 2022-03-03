<?php
    $user="root";
    $pass="";
    $host="//localhost";

    //CONECTAR A BD
    $connection = mysqli_connect($host, $user, $pass);

    //hacemos llamado al input
    $nombre=$_POST["Nombres"];
    
    //verififcar conexion
    if(!$connection)
    {
        echo"No se pudo conectar".mysql_erro();

    }else{
        echo"<b><h3>Hconexión exitosa</h3></b>";
    }
    $datb="agenda";
    $db=mysqli_select_db($connection,$datb);
    if (!$db) {
        echo"No se a podido conectar a la table";
    }
    else{
        echo"<b>tabla seleccionada</b>";
    }

    $instruccion_SQL="INSERT INTO agencia(NombreCompleto) VALUES('$nombre');
    $resultado=mysqli_query($connection, $instruccion_SQL);
    ?>
<?php
    mysql_close($connection);
?>