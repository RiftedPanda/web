<?php

  session_start();

  if(isset($_SESSION['usuario'])){
    echo "";
  }
  else{
    header("Location: index.php"); 
  }
?>


 <!doctype html>
 <html>
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="build/css/bootstrap.min.css">
 <link rel="stylesheet" href="build/css/feed.css">
 <link rel="stylesheet" href="build/css/searchstyle.css">
 <title>Welcome, here's your feed</title>
 </head>
<body>
   <!--  INICIA EL CONTENIDO ****************************************************************************** -->
<!--
<header>
  logo en la esquina
<div class="container-fluid">
  <a class="navbar-brand" href="#"><img id="logo" src="build/images/frog.png"></a>
  <span class="text-muted"> Logo final</span>
</div>
</header>   -->



<!-- MAIN  Parte para postear, posts-->
<div id="Content" class="container-fluid">
  <div class="row">
    <aside class="profile rounded col-12 col-xl-3">
          <div>
            <!-- <?php
              include 'config.php';
              $usuario = $_SESSION['usuario'];
              $sql = "SELECT * FROM users WHERE (username = '$usuario') ";
              $resultado = mysqli_query($conexion, $sql) or die("Error en consulta");

              while ($columna = mysqli_fetch_array($resultado))
              {
                echo "<br><img  src='web-master/".$columna['foto']." '></div><br>";
              }
                /*<img id="profilepic" class="mx-auto mt-5 d-block" src="<?php echo $foto; ?>" alt="">*/
              ?>-->
            <a href="#"><img class="imagenaqui"  src="build/images/profile.png" alt=""></a>
            <h3>¡Bienvendid@!</h3>
              <a href="profile.php"><h1><?= $_SESSION['fullname']?></h1></a>
            <ul class="three_top">
                <li><a href="#"><?= $_SESSION['facebook']?></a></li>
                <span>|</span>
                <li><a href="#"><?= $_SESSION['twitter']?></a></li>
                <span>|</span>
                <li><a href="#"><?= $_SESSION['instagram']?></a></li>
            </ul>

            <ul class="morelinks">
              <li><a href="#"><?= $_SESSION['deviantart']?></a></li>
              <li><a href="#"><?= $_SESSION['tumblr']?></a></li>
              <li><a href="#"><?= $_SESSION['patreon']?></a></li>
            </ul>


          </div>

          <div class="info">
            <p><?= $_SESSION['description']?></p>
          </div>
      </aside>
    <main class="col-12 col-xl-8 mb-3">
        <div class="pensador rounded">
            <form  method="post">
                <div>
                   <h3 class="posttext">¿En qué estás trabajando?</h3>
                   <textarea data-toggle="modal"  data-target="#exampleModal" title="¡Comparte tu trabajo!" placeholder="¡Comparte tu trabajo!" class="form-control" id="Postarea1" rows="1"></textarea>
                </div>
            </form>
            <!-- MODAL ashdlkfkasdfhjksahdkjfhksadgfkjsahdfgsafasdhgfajksdhflkjashdlfkjahsdlfkjsa -->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">¡Nuevo Post!</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Título:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Descripción:</label>
                        <textarea class="form-control" id="message-text2"></textarea>
                      </div>

                  </div>
                  <div class="modal-footer">
                          <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success">Subir</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- smasdfhlkjsadhflkjsadhflkjhsadlkjfhlkjsadhfkjsadhflkjashdflkjsahdlkfjhasdlkfjhsalkdjfhsaldkjfhsaidlf -->
        </div>

        <div class="world-latest-articles">
            <div class="row">
                <div>
                    <div class="title">
                        <h5>Latest Articles</h5>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post shadow p-3 mb-5 bg-white rounded d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="build/images/blog-img/b18.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>Me estoy sintiendo Van Gogh con esta.</h5>
                            </a>
                            <p>Sera que era simpemente un loco malentendido y que el mundo era el verdaderamente insano?...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Nov 25, 2018 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post shadow p-3 mb-5 bg-white rounded post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="build/images/blog-img/b19.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>Playas Hermosas:3</h5>
                            </a>
                            <p>Viaje con mi familia a Miami y me inspire para hacer esta pieza...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Luke Thompson</a> on <a href="#" class="post-date">Nov 27, 2018 at 3:48 am</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post shadow p-3 mb-5 bg-white rounded post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="build/images/blog-img/b20.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>La ciudad nunca duerme...</h5>
                            </a>
                            <p>Una metropolis urbana extensa que parece tener vida y aliento propio...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Cristina Malloy</a> on <a href="#" class="post-date">Nov 26, 2018 at 3:48 pm</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post shadow p-3 mb-5 bg-white rounded post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="build/images/blog-img/b21.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>Sesion de fotografias</h5>
                            </a>
                            <p>Hermosas fotografias de Katherine Pines.XOXO...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Mathew Anderson</a> on <a href="#" class="post-date">Nov 27, 2018 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </main>
    <!--Aside - PERFIL**************************************************************************************************************** -->

  </div>
</div>
<!-- FOOTER ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<footer>
  <div class="container-fluid">
    <div class="row fixed-bottom justify-content-center mb-4">
        <div class="coso">
          <!-- Just an image -->
            <div class="mx-1 d-inline">
              <form action="search.php"  method="POST">
              <div class="search-box">
                <input id="search-txt" class="search-txt" type="text" name="search" placeholder="Type to search">
                <button type="submit" name="submit-search" class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
                </div>
              </form>
            </div>
          <!-- Just an image -->
            <div class="mx-1 d-inline">
              <a  href="account/profile.php">
                <img  src="build/images/feed/icon1.png" width="45" height="45" alt="">
              </a>
            </div>
          <!-- Just an image -->
            <div class="mx-1 d-inline">
              <a  href="account/logout.php">
                <img  src="build/images/feed/icon1.png" width="45" height="45" alt="">
              </a>
            </div>

        </div>
    </div>
  </div>
</footer>

<!-- Aqui hay que generar la parte que ira a unlado con los diferentes datos que se coneguiran atravez
de la base de datos, datos del usuario. -->


   <!-- TERMINA EL CONTENIDO *************************************************************************************  -->
 <script type="text/javascript" src="build/js/jquery-3.3.1.slim.min.js"></script>
 <script type="text/javascript" src="build/js/popper.min.js"></script>
 <script type="text/javascript" src="build/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="build/js/scripts.js"></script>
 <script type="text/javascript" src="build/js/search.js"></script>
 </body>
 </html>
