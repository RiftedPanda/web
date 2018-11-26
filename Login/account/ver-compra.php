<?php

  session_start();

  if(isset($_SESSION['usuario'])){
    echo "";
  }
  else{
    header("Location: ../index.php"); 
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PrimeMarket | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    .prod-info-main {
        border: 1px solid #CEEFFF;
        margin-bottom: 20px;
        margin-top: 10px;
        background: #fff;
        padding: 6px;
        -webkit-box-shadow: 0 1px 4px 0 rgba(21,180,255,0.5);
        box-shadow: 0 1px 1px 0 rgba(21,180,255,0.5);
    }

    .prod-info-main .product-image {
        background-color: #EBF8FE;
        display: block;
        min-height: 238px;
        overflow: hidden;
        position: relative;
        border: 1px solid #CEEFFF;
        padding-top: 40px;
    }

    .rotprod{
        -webkit-transition-duration: 0.8s;
        -moz-transition-duration: 0.8s;
        -o-transition-duration: 0.8s;
        transition-duration: 0.8s;
        }  
     
    .rotprod:hover  
    {
        -webkit-transform:rotate(360deg);
        -moz-transform:rotate(360deg);
        -o-transform:rotate(360deg);
    } 

    .prod-info-main .product-deatil {
        border-bottom: 1px solid #dfe5e9;
        padding-bottom: 17px;
        padding-left: 16px;
        padding-top: 16px;
        position: relative;
        background: #fff
    }

    .product-content .product-deatil h5 a {
        color: #2f383d;
        font-size: 15px;
        line-height: 19px;
        text-decoration: none;
        padding-left: 0;
        margin-left: 0
    }

    .prod-info-main .product-deatil h5 a span {
        color: #9aa7af;
        display: block;
        font-size: 13px
    }

    .prod-info-main .product-deatil span.tag1 {
        border-radius: 50%;
        color: #fff;
        font-size: 15px;
        height: 50px;
        padding: 13px 0;
        position: absolute;
        right: 10px;
        text-align: center;
        top: 10px;
        width: 50px
    }

    .prod-info-main .product-deatil span.sale {
        background-color: #21c2f8
    }

    .prod-info-main .product-deatil span.discount {
        background-color: #71e134
    }

    .prod-info-main .product-deatil span.hot {
        background-color: #fa9442
    }

    .prod-info-main .description {
        font-size: 12.5px;
        line-height: 20px;
        padding: 10px 14px 16px 19px;
        background: #fff
    }

    .prod-info-main .product-info {
        padding: 11px 19px 10px 20px
    }

    .prod-info-main .product-info a.add-to-cart {
        color: #2f383d;
        font-size: 13px;
        padding-left: 16px
    }

    .prod-info-main name.a {
        padding: 5px 10px;
        margin-left: 16px
    }

    .product-info.smart-form .btn {
        padding: 6px 12px;
        margin-left: 12px;
        margin-top: -10px
    }

    .load-more-btn {
        background-color: #21c2f8;
        border-bottom: 2px solid #037ca5;
        border-radius: 2px;
        border-top: 2px solid #0cf;
        margin-top: 20px;
        padding: 9px 0;
        width: 100%
    }

    .product-block .product-deatil p.price-container span,
    .prod-info-main .product-deatil p.price-container span,
    .shipping table tbody tr td p.price-container span,
    .shopping-items table tbody tr td p.price-container span {
        color: #21c2f8;
        font-family: Lato, sans-serif;
        font-size: 24px;
        line-height: 20px
    }

    .product-info.smart-form .rating label {
        margin-top:15px;
        
    }

    .prod-wrap .product-image span.tag2 {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        padding: 10px 0;
        color: #fff;
        font-size: 11px;
        text-align: center
    }

    .prod-wrap .product-image span.tag3 {
        position: absolute;
        top: 10px;
        right: 20px;
        width: 60px;
        height: 36px;
        border-radius: 50%;
        padding: 10px 0;
        color: #fff;
        font-size: 11px;
        text-align: center
    }

    .prod-wrap .product-image span.sale {
        background-color: #57889c;
    }

    .prod-wrap .product-image span.hot {
        background-color: #a90329;
    }

    .prod-wrap .product-image span.special {
        background-color: #3B6764;
    }
    .shop-btn {
        position: relative
    }

    .shop-btn>span {
        background: #a90329;
        display: inline-block;
        font-size: 10px;
        box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07);
        font-weight: 700;
        border-radius: 50%;
        padding: 2px 4px 3px!important;
        text-align: center;
        line-height: normal;
        width: 19px;
        top: -7px;
        left: -7px
    }

    .product-deatil hr {
        padding: 0 0 5px!important
    }

    .product-deatil .glyphicon {
        color: #3276b1
    }

    .product-deatil .product-image {
        border-right: 0px solid #fff !important
    }

    .product-deatil .name {
        margin-top: 0;
        margin-bottom: 0
    }

    .product-deatil .name small {
        display: block
    }

    .product-deatil .name a {
        margin-left: 0
    }

    .product-deatil .price-container {
        font-size: 24px;
        margin: 0;
        font-weight: 300;
        
    }

    .product-deatil .price-container small {
        font-size: 12px;
        
    }

    .product-deatil .fa-2x {
        font-size: 16px!important
    }

    .product-deatil .fa-2x>h5 {
        font-size: 12px;
        margin: 0
    }

    .product-deatil .fa-2x+a,
    .product-deatil .fa-2x+a+a {
        font-size: 13px
    }

    .product-deatil .certified {
        margin-top: 10px
    }

    .product-deatil .certified ul {
        padding-left: 0
    }

    .product-deatil .certified ul li:not(first-child) {
        margin-left: -3px
    }

    .product-deatil .certified ul li {
        display: inline-block;
        background-color: #f9f9f9;
        padding: 13px 19px
    }

    .product-deatil .certified ul li:first-child {
        border-right: none
    }

    .product-deatil .certified ul li a {
        text-align: left;
        font-size: 12px;
        color: #6d7a83;
        line-height: 16px;
        text-decoration: none
    }

    .product-deatil .certified ul li a span {
        display: block;
        color: #21c2f8;
        font-size: 13px;
        font-weight: 700;
        text-align: center
    }

    .product-deatil .message-text {
        width: calc(100% - 70px)
    }
    /*--Button effect classes for add to cart*/ 
    .btn-cart{
        border-radius: 0;
        position: relative;
        color: #fff;
        border:1px solid transparent;
        text-transform: uppercase;
        transition: all 0.40s ease 0s;
    }
    .btn-cart:after{
        content: "\f07a";
        font-family: fontawesome;
        position: absolute;
        right: 6px;
        top: -4px;
        opacity: 0;
        color: #fff;
        transition: all 0.40s ease 0s;
    }
    .btn-cart:hover:after{
        top:40%;
        opacity: 5;
    }
    .btn-cart span{
        display: block;
        transition: all 0.70s linear 0s;
    }
    .btn-cart:hover span{
        transform: translate(-9px);
    }

    /*--Button effect classes for More info*/ 

    @media only screen and (min-width:1024px) {
        .prod-info-main div[class*=col-md-4] {
            padding-right: 0
        }
        .prod-info-main div[class*=col-md-8] {
            padding: 0 13px 0 0
        }
        .prod-wrap div[class*=col-md-5] {
            padding-right: 0
        }
        .prod-wrap div[class*=col-md-7] {
            padding: 0 13px 0 0
        }
        .prod-info-main .product-image {
            border-right: 1px solid #dfe5e9
        }
        .prod-info-main .product-info {
            position: relative
        }
    }
  </style>
</head>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pmart";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>
<body class="sidebar-collapse skin-blue fixed">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="profile.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LTE</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Prime</b>Market</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
  
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="" data-toggle="modal" data-target="#modal-info">
              <i class="fa fa-shopping-cart"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
              
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                  
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>

          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/default.png" class="user-image" alt="User Image">
               <?php 

                    include '../config.php';
                    $usuario = $_SESSION['usuario'];
                    $sql = "SELECT * FROM users WHERE (Nombre = '$usuario') ";
                    $resultado = mysqli_query($conexion, $sql) or die("Error en consulta");   

                    while ($columna = mysqli_fetch_array($resultado)) 
                    {          
                      echo"<span class=hidden-xs>".$columna['Nombre']."</span>";
                    }
              ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/default.png" class="img-circle" alt="User Image">
                <?php 

                    include '../config.php';
                    $usuario = $_SESSION['usuario'];
                    $sql = "SELECT * FROM users WHERE (Nombre = '$usuario') ";
                    $resultado = mysqli_query($conexion, $sql) or die("Error en consulta");   

                    while ($columna = mysqli_fetch_array($resultado)) 
                    { 
                       echo"<p>".$columna['Nombre']." - Usuario</p>";
                    }
                ?>

              </li>

              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>

  <div class="modal modal-info fade" id="modal-info">
      <form action="../account/market.php" method = "get">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Ingrese su presupuesto</h4>
              </div>
              <div class="modal-body">
               <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
              
                <input type="number" class="form-control" name="presupuesto" placeholder="Monto" autocomplete="off">
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Salir</button>
                <input type="submit" class="btn btn-outline" value = "Continuar" name = "enviar" onclick="location.href='market.php'">
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
        </form>
  </div>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ver Compra
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-cart"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><i class="fa fa-shopping-cart"></i> <span class="total_compras_usuario">$3215</span></h3>
              <p>Total de compras</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">

        <div class="col-xs-12 col-md-6">
          <div class="prod-info-main prod-wrap clearfix" style="height: 104px;">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                  <div class="product-image" style="padding: 0; min-height: inherit; height: 96px;"> 
                    <img src="jamon.jpg" class="img-responsive rotprod" style="height: 100%;"> 
                    <span class="tag2 hot">
                      Categoria
                    </span> 
                  </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                  <div class="product-deatil">
                      <h5 class="name">
                        <a href="#">
                          Codigo del producto/Nombre aquí
                        </a>
                        <a href="#">
                          <span>Categoria</span>
                        </a>                            
                      </h5>
                      <p class="price-container">
                        <span>$3000</span>
                      </p>
                      
                  </div> 
                </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="prod-info-main prod-wrap clearfix" style="height: 104px;">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                  <div class="product-image" style="padding: 0; min-height: inherit; height: 96px;"> 
                    <img src="chela.jpg" class="img-responsive rotprod" style="height: 100%;"> 
                    <span class="tag2 hot">
                      Categoria
                    </span> 
                  </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                  <div class="product-deatil">
                      <h5 class="name">
                        <a href="#">
                        </a>
                        <a href="#">
                          <span>Vinos/Licores</span>
                        </a>                            
                      </h5>
                      <p class="price-container">
                        <span>$200</span>
                      </p>
                      
                  </div> 
                </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="prod-info-main prod-wrap clearfix" style="height: 104px;">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                  <div class="product-image" style="padding: 0; min-height: inherit; height: 96px;"> 
                    <img src="chescos.jpg" class="img-responsive rotprod" style="height: 100%;"> 
                    <span class="tag2 hot">
                      Categoria
                    </span> 
                  </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                  <div class="product-deatil">
                      <h5 class="name">
                        <a href="#">
                        </a>
                        <a href="#">
                          <span>Bebidas</span>
                        </a>                            
                      </h5>
                      <p class="price-container">
                        <span>$15</span>
                      </p>
                      
                  </div> 
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Equipo</b> Crustaceo
    </div>
    <strong>Copyright &copy; 2018 <a href="#">PrimeMarket</a>.</strong> Todos los derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        
      </div>     
    </div>
  </aside>

  <div class="control-sidebar-bg"></div>
</div>
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->
<script>
  $(function () {

   

    /* END BAR CHART */
  })
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>

</body>
</html>
