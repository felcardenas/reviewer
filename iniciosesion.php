<?php
include "global/conexion.php";
include "plantillas/header.php";
?>



<div class="container rounded mt-5 py-2 form-bg">
    
    <form action="webservices/iniciosesion.php" method="POST">
    <h1 class="text-center">INGRESO</h1>  
    <div class="form-group">
        <label>Nombre de usuario o email</label>
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario o email">
       
    </div>
    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingrese su contraseña">
    </div>
    <!-- <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Mantener sesión abierta</label>
    </div> -->
    <button type="submit" class="btn btn-outline-light">INGRESAR</button>
    </form>

<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if($id == 1 || $id ==2){
    switch($id){
        

        case 1:
            $mensaje = 'USUARIO NO EXISTE';
        break;

        case 2:
            $mensaje = 'CONTRASEÑA INCORRECTA';
        break;

        default:
            $mensaje = '';
        break;
    }

?>

<div class="alert alert-danger text-center mt-3" role="alert">
<?php 
echo $mensaje;
}

?></div>
<?php } ?>




</div>

<?php 
include 'plantillas/footer.php'; 
?>