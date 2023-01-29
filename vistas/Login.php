<?php
//Inicio sesiones
session_start();

if(isset($_SESSION["logged"])){
    header("Location: index.php");
}
?>

<?php require_once 'header.php'; ?> 
<h2>Inicia Sesión</h2>
<div class="col-lg-4">
    <?php
     if(isset($_SESSION["error_login"])){ ?>
        
        <div class="alert alert-danger">Login Incorrecto</div> 
    <?php } ?>
<form action="Login-user.php" method="POST">
    Email: <input name="email" type="email" class="form-control" />
    Contraseña: <input name="password" type="password" class="form-control" />
    <br/>
    <input type="submit" class="btn btn-success" name="submit" value="Entrar" />
</form>
</div>
<div class="clearfix"></div>
<?php require_once 'footer.php'; ?>
