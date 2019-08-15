<?php 

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">  
    
    <script src="https://kit.fontawesome.com/fa068e4c93.js"></script>

    <link rel="stylesheet" href="css/estilos.css"> 

    <title>REVIEWER</title>
  </head>
  <body>


<!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">REVIEWER</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

            <ul class="navbar-nav mr-auto mt-2 mt-sm-0 text-center">

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">INICIO <span class="sr-only">(current)</span></a>
                        </li>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">PRODUCTOS</a>
                        </li>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">ETC</a>
                        </li>
                    </div>    
                </div>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="row mx-auto">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                        <input class="form-control form-control my-2 my-sm-0" type="search" placeholder="Ingrese su búsqueda">
                    </div>
                </div>
                <div class="row mx-auto">    
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">BUSCAR</button>
                    </div>
                </div>
            </form>
        

            <ul class="navbar-nav text-center">

                
                    <?php if(!isset($_SESSION['usuario'])){
                    ?>
                        <li class="nav-item">
                            
                                <a class="nav-link text-center" href="iniciosesion.php"><i class="fas fa-sign-in-alt fa mr-2"></i>INGRESAR
                                </a>
                            
                        </li>
                    
                    
                        <li class="nav-item">
                            
                                <a class="nav-link text-center" href="#"><i class="fas fa-user-plus fa mr-2"></i>REGISTRARSE</a>
                           
                        </li>

                    <?php }else{ ?>

                        <li class="nav-item">
                            
                                <a class="nav-link text-center" href="#"><i class="fas fa-user fa mr-2"></i>PERFIL</a>
                           
                        </li> 

                        <li class="nav-item">
                                <a class="nav-link text-center" href="cerrarsesion.php">CERRAR SESIÓN</a>
                        </li>
                    
                    <?php } ?>
                    
                
            </ul>
        


    </div>

    
</nav>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
