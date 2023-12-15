<?php

    function conectar(){
        $hostname = "localhost";
        $usuariodb = "root";
        $passworddb = "";
        $dbname = "panaderia";

        $con = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
        mysqli_select_db($con, $dbname);
        return $con;
    }
?>