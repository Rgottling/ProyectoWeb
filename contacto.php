<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <script src="https://kit.fontawesome.com/6e1c00e6cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Comic Blog</title>
  </head>
  <body>
    <!-- Navbar -->
    <?php include ('layout/_navbar.php') ?>


    <section class="bg-dark p-5 p-lg-0 pt-lg-5">
    <div class="container"> 
    </div>
    </section>

    <!-- Contact & Map -->
    <section   class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        </div>
        
        <form action="agregar_datos.php" method="post" class= "container  w-100">
            <table class="m-auto">
               
                <tr>
                    <td>Nombre: <input type="text" class="form-control" name="nombre" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>Apellido: <input type="text" class="form-control" name="apellido" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>Email: <input type="email" class="form-control" name="email" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>Usuario: <input type="text" class="form-control" name="usuario" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>Clave: <input type="password" class="form-control" name="clave" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td>Repetir Clave: <input type="password" class="form-control" name="repetir_clave" id="" placeholder="" required autocomplete=""></td>
                </tr>
                <tr>
                    <td class="container"><input class="mb-3 m-auto  mt-3" type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>
    </div>


    </section>

    
   

    <?php require_once ('layout/_footer.php') ?>

   

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


  </body>
</html>