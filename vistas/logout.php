<?php
//Inicio sesiones
session_start();

if(isset($_SESSION["logged"])){
    unset($_SESSION["logged"]);
    //session_destroy();
    header("Location: Login.php");
}
?>
