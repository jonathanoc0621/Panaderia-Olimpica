<?php

    include("conexion.php");
    $con=conectar();

    $Cli_nombre=$_POST['nombre'];
    $Cli_telefono=$_POST['telefono'];
    $Cli_barrio=$_POST['barrio'];
    $Cli_ciudad=$_POST['ciudad'];
    $Cli_numeroresidencial=$_POST['numeroresidencial'];

    $sql= " UPDATE clientes SET Cli_telefono='$Cli_telefono', Cli_barrio='$Cli_barrio', Cli_ciudad='$Cli_ciudad', Cli_numeroresidencial='$Cli_numeroresidencial' WHERE Cli_nombre='$Cli_nombre'";
    $query= mysqli_query($con, $sql);

    if($query){
        header("Location: contact.php");
    }

?>  