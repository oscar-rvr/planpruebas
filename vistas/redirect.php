<?php
//Inicio sesiones
session_start();
if(!isset($_SESSION["logged"])){
    header("location: Login.php");
}

?>