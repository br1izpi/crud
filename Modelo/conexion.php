<?php

                    $usuario = "root"; 
                    $password = "";   
                    $servidor = "localhost"; 
                    $basededatos ="crud_php"; 
             
                     $conexion = mysqli_connect  ($servidor,$usuario,""); 
             
                     $db = mysqli_select_db($conexion, $basededatos);
             
                     $conexion-> set_charset("utf8");
    
?>