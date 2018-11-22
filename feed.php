<?php

 ?>

 <!doctype html>
 <html>
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="build/css/bootstrap.min.css">
 <link rel="stylesheet" href="build/css/feed.css">
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
            <a href="#"><img class="imagenaqui"  src="build/images/profile.png" alt=""></a>
            <h3>¡Bienvendid@!</h3>
            <h1>Nombre</h1>
            <ul class="three_top">
                <li><a href="#">Red social 1</a></li>
                <span>|</span>
                <li><a href="#">Red social 2</a></li>
                <span>|</span>
                <li><a href="#">Red social 3</a></li>
            </ul>

            <ul class="morelinks">
              <li><a href="#">A bigger social media place</a></li>
              <li><a href="#">A bigger social media place</a></li>
            </ul>


          </div>

          <div class="info">
            <p>Aqui va a la info lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
      </aside>
    <main class="col-12 col-xl-8">
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
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
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
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
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
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
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
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
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
    <div class="row my-4">
      <div class="col-12 p-2 fixed-bottom display-inline">
        <div class="icons m-y-3" align="right">
          <!-- Just an image -->
          <a  href="#">
            <img src="build/images/feed/icon1.png" width="45" height="45" alt="">
          </a>
          <!-- Just an image -->
          <a  href="#">
            <img  src="build/images/feed/icon1.png" width="45" height="45" alt="">
          </a>
          <!-- Just an image -->
          <a  href="#">
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
 </body>
 </html>
