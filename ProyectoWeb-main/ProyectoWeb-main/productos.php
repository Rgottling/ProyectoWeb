<?php

require_once('conf/conf.php');
require_once('consultas/producto.php');
require_once('funciones/paginador.php');

//Nos conectamos a la base de datos.
try{
    $conexion = new PDO(
        'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
}catch(PDOException $e){
    echo "Falló la conexión: " . $e->getMessage();
    exit;
}

$pag = $_GET['pag'] ?? 1;

$cantidad = countProductos($conexion);

$paginacion = paginador($cantidad, $pag, 10);

$productos = getProductos($conexion, $pag, 10);

unset($conexion);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" integrity="sha384-xBXmu0dk1bEoiwd71wOonQLyH+VpgR1XcDH3rtxrLww5ajNTuMvBdL5SOiFZnNdp" crossorigin="anonymous"></script>

    <title> Ejemplo de conexión a la base de datos </title>
  </head>
  <body>
  <?php include ("../ProyectoWeb-main/layout/_navbar.php") ?>
 </br>
  <section class="bg-dark p-5 p-lg-0 pt-lg-5">
    <div class="container"> 
    </div>
    </section>
    <div class="container">
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> Nombre </th>
                    <th scope="col"> Modelo </th>
                    <th scope="col"> Precio </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($productos as $p): ?>
                    <tr>
                        <td>
                          <?php echo $p['nombre'] ?>
                        </td>
                        <td> <?php echo $p['modelo'] ?> </td>
                        <td> <?php echo $p['precio'] ?> </td>
                    </tr>
                <?php endforeach ?>
            </tbody>            
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php if($paginacion['anterior']): ?>
                    <li class="page-item">
                        <a class="page-link" href="productos.php?pag=<?php echo $paginacion['primero'] ?>"> Primero </a>                        
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="productos.php?pag=<?php echo $paginacion['anterior'] ?>"> <?php echo $paginacion['anterior'] ?> </a>
                    </li>
                <?php endif ?>
                <li class="page-item active"> 
                    <span class="page-link">
                        <?php echo $paginacion['actual'] ?> 
                    </span>
                </li>
                <?php if($paginacion['siguiente']): ?>
                    <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginacion['siguiente'] ?>"> <?php echo $paginacion['siguiente'] ?> </a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="?pag=<?php echo $paginacion['ultimo'] ?>"> Último </a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>