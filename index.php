<?php 

include 'global/conexion.php';
include 'plantillas/header.php';


if(isset($_SESSION['usuario'])){
?>

<div class="container mt-3">

    <h3 class="">Bienvenid@
    <?php echo " ".$_SESSION['usuario'];
    }?>
    </h3>   

</div>


<?php 

include 'plantillas/footer.php'; 
?>