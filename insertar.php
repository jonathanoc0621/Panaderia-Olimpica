<?php
     
    include("conexion.php");
    $con=conectar();

    $Cli_nombre=$_POST['nombre'];
    $Cli_telefono=$_POST['telefono'];
    $Cli_barrio=$_POST['barrio'];
    $Cli_ciudad=$_POST['ciudad'];
    $Cli_numeroresidencial=$_POST['numeroresidencial'];

    $sql = "INSERT INTO clientes(Cli_nombre,Cli_telefono, Cli_barrio, Cli_ciudad, Cli_numeroresidencial) 
    VALUES ('$Cli_nombre', '$Cli_telefono','$Cli_barrio','$Cli_ciudad','$Cli_numeroresidencial');";
    $query= mysqli_query($con, $sql);

    if($query){
        Header("Location: contact.php");
    }else{

    }

?>       