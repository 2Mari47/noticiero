
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>NOTICIAS SON NOTICIAS 2025</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/examples/blog/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="#">ACONTECIMIENTOS 2025</a>
          </div>
        </div>
      </header>

      <?php
        include("api/secciones/portada.php");
      ?>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic">
            <?php
              echo $portada["titulo"];
            ?>
          </h1>
          <p class="lead my-3">
            <?php
              echo $portada["resumen"];
            ?>
          </p>
        </div>
      </div>

      <!-- Fila 1 -->
      <?php
        include("api/secciones/internacional.php");
        include("api/secciones/nacional.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-primary">Internacional</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $internacional["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $internacional["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $internacional["resumen"];
                ?>
              </p>
              <a href="#">Continuar leyendo</a>
            </div>
            <div class="col-md-4 p-0">
              <img class="card-img-right flex-auto d-none d-md-block" src="https://images.unsplash.com/photo-1645605357034-f32b3960fc37?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=435" alt="Crisis energética en Europa" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-success">Nacional</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $nacional["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $nacional["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $nacional["resumen"];
                ?>
              </p>
              <a href="#">Continuar leyendo</a>
            </div>
            <div class="col-md-4 p-0">
              <img class="card-img-right flex-auto d-none d-md-block" src="https://plus.unsplash.com/premium_photo-1697729476736-18a05381123f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=687" alt="Emergencia por heladas en Perú" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Fila 1 -->

      <!-- Fila 2 -->
      <?php
        include("api/secciones/economia.php");
        include("api/secciones/opinion.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-secondary">Economía</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $economia["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $economia["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $economia["resumen"];
                ?>
              </p>
              <a href="#">Continuar leyendo</a>
            </div>
            <div class="col-md-4 p-0">
              <img class="card-img-right flex-auto d-none d-md-block" src="https://plus.unsplash.com/premium_photo-1678824564711-a051c5a869b0?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=687" alt="BCR mantiene tasa de interés" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-warning">Opinión</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $opinion["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $opinion["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $opinion["resumen"];
                ?>
              </p>
              <a href="#">Continuar leyendo</a>
            </div>
            <div class="col-md-4 p-0">
              <img class="card-img-right flex-auto d-none d-md-block" src="https://images.unsplash.com/photo-1564992236692-63602c83ee19?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=435" alt="Análisis de reforma política" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Fila 2 -->

      <!-- Fila 3 -->
      <?php
        include("api/secciones/tecnologia.php");
        include("api/secciones/ciencia.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-primary">Tecnología</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $tecnologia["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $tecnologia["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $tecnologia["resumen"];
                ?>
              </p>
              <a href="#">Continuar leyendo</a>
            </div>
            <div class="col-md-4 p-0">
              <img class="card-img-right flex-auto d-none d-md-block" src="https://plus.unsplash.com/premium_photo-1683120974913-1ef17fdec2a8?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=363" alt="Nuevos procesadores Intel" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-success">Ciencia</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $ciencia["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $ciencia["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $ciencia["resumen"];
                ?>
              </p>
              <a href="#">Continuar leyendo</a>
            </div>
            <div class="col-md-4 p-0">
              <img class="card-img-right flex-auto d-none d-md-block" src="https://plus.unsplash.com/premium_photo-1719104087061-6f73947c4c43?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=450" alt="Descubrimiento en luna Europa" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Fila 3 -->

      <!-- Fila 4 -->
      <?php
        include("api/secciones/cultura.php");
        include("api/secciones/gente.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-secondary">Cultura</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $cultura["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $cultura["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $cultura["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-warning">Gente</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $gente["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $gente["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $gente["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Fila 4 -->      

      <!-- Fila 5 -->
      <?php
        include("api/secciones/deportes.php");
        include("api/secciones/television.php");
        include("api/secciones/video.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-primary">Deportes</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $deportes["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $deportes["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $deportes["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-success">Televisión</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $television["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $television["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $television["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-success">Televisión</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $video["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $video["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $video["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Fila 5 -->

      <!-- Fila 6 -->
      <?php
        include("api/secciones/formacion.php");
        include("api/secciones/empleo.php");
        include("api/secciones/sociedad.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-primary">Formación</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $formacion["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $formacion["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $formacion["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-success">Empleo</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $empleo["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $empleo["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $empleo["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-success">Sociedad</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $sociedad["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $sociedad["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $sociedad["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Fila 6 -->

      <!-- Fila 7 -->
      <?php
        include("api/secciones/openstack.php");
        include("api/secciones/git.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-primary">OpenStack</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $openstack["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $openstack["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $openstack["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-success">Git</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $git["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $git["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $git["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Fila 7 -->

      <!-- Fila 8 -->
      <?php
        include("api/secciones/contenedores.php");
        include("api/secciones/openshift.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-secondary">Contenedores</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $contenedores["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $contenedores["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $contenedores["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-warning">OpenShift</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php
                    echo $openshift["titulo"];
                  ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php
                  echo $openshift["autor"];
                ?>
              </div>
              <p class="card-text mb-auto">
                <?php
                  echo $openshift["resumen"];
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Fila 8 -->
    </div>


    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
