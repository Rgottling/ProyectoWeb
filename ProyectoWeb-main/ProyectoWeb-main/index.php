<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"/>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <script src="https://kit.fontawesome.com/6e1c00e6cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title> Comic Blog</title>
  </head>
  <body>


    <?php include ('layout/_navbar.php') ?>

    <!--- Showcase -->
    
    <?php include ('layout/_showCase.php') ?>

 
    <!-- Boxes -->
  
    <?php include ('layout/_boxes.php') ?>


    <!-- Learn Sections -->
    <section id="learn" class="bg-secondary p-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
          <iframe class="row align-items-center justify-content-between" width="560" height="315" src="https://www.youtube.com/embed/KcBStos46EM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md p-5">
            <h2>Loki</h2>
            <p class="lead">
              Loki es una serie que gira en torno al Dios del Engaño de Marvel y que retoma su historia
              justo después de cuando éste se hace con el Teseracto en Vengadores:
              Endgame, la última película de la Fase 3 del Universo Cinematográfico de Marvel.
            </p>
            <p>
            La serie de Disney Plus está repleta de estrellas. Junto a Tom Hiddleston, el mejor Loki que podríamos haber tenido jamás,
            se incorporan al MCU Owen Wilson, Gugu Mbatha-Raw, Erika Coleman, Sophia Di Martino y Richard E. Grant,
            aunque de este último no se ha revelado su papel.
            </p>
            <a href="#" class="btn btn-light mt-3">
              <i class="bi bi-chevron-right"></i> Ver ahora </a>
          </div>
        </div>
      </div>
    </section>

    <section id="learn" class="p-5 bg-dark text-light">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">
            <h2>WandaVision</h2>
            <p class="lead">
                Wanda Maximoff y Vision llegan a vivir al pueblo de Westview, donde tendrán que esconder sus súperpoderes
                para acoplarse a la vida mundana de los suburbios. Sin embargo nada es lo que parece y poco a poco la
                realidad comenzará a desvanecerse.
            </p>
            <p>
              Marvel Studios' WandaVision combina el estilo cómico de situaciones clásicas con el Universo Cinematográfico
              de Marvel en el que Wanda Maximoff y Visión, dos seres superpoderosos que viven su vida suburbana ideal,
              comienzan a sospechar que no todo es lo que parece.
            </p>
            <a href="#" class="btn btn-light mt-3">
              <i class="bi bi-chevron-right"></i> Ver ahora </a>
          </div>
          <div class="col-md">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/UuhqbcMNrME?start=5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

   
    <?php include ('layout/_footer.php') ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   
  
  </body>
</html>