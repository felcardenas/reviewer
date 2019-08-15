<?php
include "../global/conexion.php";


if(isset($_POST)){
    validarUsuario($conexion);
}


function validarUsuario($conexion){
    $usuario = $_POST['usuario'];
    $sql = "SELECT nombre FROM usuarios WHERE nombre = '$usuario'";
    
    $resultado = mysqli_query($conexion,$sql);
    $filas = mysqli_num_rows($resultado);

     if($filas>0){
        validarPass($usuario,$conexion);
     }else{
        validarCorreo($usuario,$conexion);
     }
}

function validarCorreo($usuario,$conexion){
    $sql = "SELECT nombre, correo FROM usuarios WHERE correo = '$usuario'";
        
    $resultado = mysqli_query($conexion,$sql);
    $filas = mysqli_num_rows($resultado);
        
            
        if($filas>0){
            validarPass($usuario,$conexion);
        }else{
            header("Location:../iniciosesion.php?id=1");
        }
}

function validarPass($usuario,$conexion){
    
    $pass = $_POST['pass'];
    $sql = "SELECT pass FROM usuarios WHERE pass = '$pass'";
    
    $resultado = mysqli_query($conexion,$sql);
    $filas = mysqli_num_rows($resultado);

        if($filas>0){
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("Location:../index.php");
        }else{
            header("Location:../iniciosesion.php?id=2");
        }
}




/*
if(isset($_POST)){
    
    $usuario = $_POST['usuario'];
    $sql = "SELECT nombre FROM usuarios WHERE nombre = '$usuario'";
    
    $resultado = mysqli_query($conexion,$sql);
    $filas = mysqli_num_rows($resultado);

     if($filas>0){
        validarPass($usuario,$conexion);
      
     }else{
        $usuario = $_POST['usuario'];
        $sql = "SELECT nombre, correo FROM usuarios WHERE correo = '$usuario'";
        
        
        $resultado = mysqli_query($conexion,$sql);
        $filas = mysqli_num_rows($resultado);
        
            
            if($filas>0){
                validarPass($usuario,$conexion);
               
            }else{
                header("Location:../iniciosesion.php?id=1");
            }

     }

}*/
/*
function validarPass($usuario,$conexion){
    
                $pass = $_POST['pass'];
                $sql = "SELECT pass FROM usuarios WHERE pass = '$pass'";
                
                $resultado = mysqli_query($conexion,$sql);
                $filas = mysqli_num_rows($resultado);

                    if($filas>0){
                        session_start();
                        $_SESSION['usuario'] = $usuario;
                        header("Location:../index.php");
                    }else{
                        header("Location:../iniciosesion.php?id=2");
                    }
}*/
?>
