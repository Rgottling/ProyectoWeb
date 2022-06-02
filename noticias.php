<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <script src="https://kit.fontawesome.com/6e1c00e6cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"/>
    <title>Compu Movies</title>
  </head>
  <body>

<!-- NAVBAR -->
  <?php include ('layout/_navbar.php') ?>

<!--     -->    

    <section class="bg-dark p-5 p-lg-0 pt-lg-5">
    <div class="container"> 
    </div>
    </section>

<section   class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
<!--Section: Noticias del dia-->
<div class="row gx-5">
  <div class="col-md-6 mb-4">
    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
      <img src="img/hawkeye2.jpg" class="img-fluid" />
      <a href="#!">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>
  </div>

  <div class="col-md-6 mb-4">
    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">Noticias del día</span>
    <h4><strong>Hawkeye analisis final [SPOILER}</strong></h4>
    <p class="text-muted">

            <!-- ARRAY CLAVE: NOTICIA1  -->
    
    
    <?php require_once ('lista_noticia/noticia_dia.php') ?>
    <?php echo $noticias_marvel ['noticia1'];?>

    </p>
    <button type="button" class="btn btn-primary">Leer Mas</button>
  </div>
</div>

<!--Section: Noticias del dia-->

<div class="row gx-5">
  <div class="col-md-6 mb-4">
    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
      <img src="img/thor2.jpg" class="img-fluid" />
      <a href="#!">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>
  </div>

  <div class="col-md-6 mb-4">
    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">Noticias del día</span>
    <h4><strong>Facilis consequatur eligendi</strong></h4>
    <p class="text-muted">
        <!-- ARRAY CLAVE: NOTICIA2  -->
      <?php echo $noticias_marvel ['noticia2'];?>
    </p>
    <button type="button" class="btn btn-primary">Leer mas</button>
  </div>
</div>
<!--Section: Noticias del dia-->
<div class="row gx-5">
  <div class="col-md-6 mb-4">
    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
      <img src="img/thor3.jpg" class="img-fluid" />
      <a href="#!">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>
  </div>

  <div class="col-md-6 mb-4">
    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">Noticias del día</span>
    <h4><strong>Facilis consequatur eligendi</strong></h4>
    <p class="text-muted">
    <!-- ARRAY CLAVE: NOTICIA 3  -->
    <?php echo $noticias_marvel ['noticia3'];?>
    </p>
    <button type="button" class="btn btn-primary">Leer mas</button>
  </div>
</div>
<!--Section: Noticias del dia-->
<div class="row gx-5">
  <div class="col-md-6 mb-4">
    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
      <img src="img/gorr.jpg" class="img-fluid" />
      <a href="#!">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>
  </div>

  <div class="col-md-6 mb-4">
    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">Noticias del día</span>
    <h4><strong>Facilis consequatur eligendi</strong></h4>
    <p class="text-muted">
        <!-- ARRAY CLAVE: NOTICIA 4  -->
    <?php echo $noticias_marvel ['noticia4'];?>
    </p>
    <button type="button" class="btn btn-primary">Leer mas</button>
    </div>
    </div>
</section>

    <?php require_once ('layout/_footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>
</html>

