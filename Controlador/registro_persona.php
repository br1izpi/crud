<?php
    if(!empty($_POST["btnRegistrar"])){//si el uusari presiona el boton registrar
        if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"])  and !empty($_POST["correo"])){
                //si todos los box fueron completados
                $nombre=$_POST["nombre"];
                $apellido=$_POST["apellido"];
                $dni=$_POST["dni"];
                $fecha=$_POST["fecha"];
                $correo=$_POST["correo"];
                include "modelo/conexion.php";
                $sql = $conexion->query("INSERT INTO persona(nombre,apellido,dni,fecha_nac,correo) VALUES ('$nombre','$apellido','$dni','$fecha','$correo')");
                if($sql == 1){
                    echo '<div class="alert alert-success">Persona registrada correctamente</div>';
                }else{
                    echo '<div class="alert alert-danger">Persona registrada correctamente</div>';
                }
            }else{
                echo '<div class="alert alert-warning">Alguno de los campos están vacíos</div>';
            }
    
    }
?>