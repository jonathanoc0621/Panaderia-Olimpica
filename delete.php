<?php

    include("conexion.php");
    $con=conectar();


    $Cli_id=$_GET['id'];


    $sql= " DELETE FROM clientes WHERE Cli_nombre='$Cli_id'";
    $query= mysqli_query($con, $sql);

    if($query){
        header("Location:contact.php");
    }

?>  