<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- COPIADO DESDE bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- COPIADO DESDE https://fontawesome.com/ -->
    <script src="https://kit.fontawesome.com/1c76b34c46.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class=text-center> Hola mundo</h1>
    <div class=container-fluid row>
        <!-- COPIADO DESDE BOOSTRAP FORMULARIO-->
            <form class="col-4 p-3" method="POST"> <!--class=col-4 para reducir el tamaño del formulario-->
        
            <h3 class=text_center text-secondary>Registro de Personas</h3>
            <?php
                include "modelo/conexion.php";
                include "controlador/registro_persona.php";
                
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Dni</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                <input type="text" class="form-control" name="correo">
            </div>
            
            
            
            <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Registrar</button>
            </form>

            <div class="col-10 p-2">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "modelo/conexion.php";
                        
                        $sql=$conexion->query("SELECT * FROM persona");
                        while($datos=$sql->fetch_object()){ ?>
                           <tr>
                            <td><?= $datos->id_persona?></td>
                            <td><?= $datos->nombre?></td>
                            <td><?= $datos->apellido?></td>
                            <td><?= $datos->dni?></td>
                            <td><?= $datos->fecha_nac?></td>
                            <td><?= $datos->correo?></td>
                            <td>
                                <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
    
                            </td>
                       <?php } ?>

                   
                    </tr>
                </tbody>
                </table>


            </div>
    </div>
    
       

    <!-- COPIADO DESDE bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>