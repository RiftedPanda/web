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
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
} .btn-group>.btn:first-child {
    margin-left: 0;
}
.btn-group-vertical>.btn, .btn-group>.btn {
    position: relative;
    float: left;
}
.btn-info {
    background-color: #00c0ef;
    border-color: #00acd6;
}
.btn {
    border-radius: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid transparent;
}
.btn-info {
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
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
            <a href="profile.php">
              <i class="fa fa-hand-o-left" ></i>
              Regresar
            </a>
                      <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
            </a>
          </li>

            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                  
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
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
  <!-- Left side column. contains the logo and sidebar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Productos
        <small> Prime</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6" style="float: right; line-height: normal;">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php  
                
                echo "<h3 class='presupuesto'>$ ".$_GET['presupuesto']." <h3>";

                echo "<input value='".$_GET['presupuesto']."'' type='text' class='valor_presupuesto' hidden>";
              ?>

              <p>Presupuesto</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
           <!-- <a href="#" class="small-box-footer">agregar más dinero <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <div class="col-lg-3 col-xs-6" style="float: left;">
          <!-- small box -->
        <div class="btn-group" >
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
         Productos <span class="caret"></span> </button>
           <ul class="dropdown-menu" style="min-width: 180%;">
           <li><a href="market.php" class=" waves-effect waves-block" data-target="#tabla">Frutas y verduras <span class="badge bg-aqua" style="float: right;"> 13</span></a></li>
            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Salchichoneria <span class="badge bg-aqua" style="float: right;"> 13</span></a></li>
            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Lacteos <span class="badge bg-aqua" style="float: right;"> 13</span></a></li>
            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Jugueteria <span class="badge bg-aqua" style="float: right;"> 13</span></a></li>
            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Higiene y belleza <span class="badge bg-aqua" style="float: right;"> 13</span></a></li>
            </ul>
            </div>
        </div>
        <!-- ./col -->
        <div class="row">
      <section class="col-lg-7 connectedSortable" style="width: 100%;">
        <div class="container">
<div class="col-xs-12 col-md-6">
  <!-- First product box start here-->
  <div class="prod-info-main prod-wrap clearfix">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="product-image"> 
            <img src="jamon.jpg" class="img-responsive rotprod"> 
            <span class="tag2 hot">
              HOT
            </span> 
          </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="product-deatil">
            <h5 class="name">
              <a href="#">
                1090
              </a>
              <a href="#">
                <span>Salchichoneria</span>
              </a>                            

            </h5>
            <p class="price-container">
              <span>$3000</span>
              <input type="text" value=3000" name="" hidden class="producto">
            </p>
            <span class="tag1"></span> 
        </div>
        <div class="description">
          <p>Jamón iberico</p>
        </div>
        <div class="product-info smart-form">
          <div class="row">
            <div class="col-md-12"> 
            <button class="btn btn-danger my-cart-btn btn-agregar" data-id="1" data-name="Jamon iberico" data-summary="summary 1" data-price="3000" data-quantity="1" data-image="jamon.jpg">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end product -->
</div>
<div class="col-xs-12 col-md-6">
  <!-- First product box start here-->
  <div class="prod-info-main prod-wrap clearfix">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="product-image"> 
            <img src="descarga.jpg" alt="194x228" class="img-responsive rotprod"> 
            <span class="tag2 hot">
              HOT
            </span> 
          </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="product-deatil">
            <h5 class="name">
              <a href="#">
                1023
                 <span>Salchichoneria</span>
              </a>
            </h5>
            <p class="price-container">
              <span>$50</span>
              <input type="text" value="50" name="" hidden class="producto1">

            </p>
            <span class="tag1"></span> 
        </div>
        <div class="description">
          <p>Chorizo poblano</p>
        </div>
        <div class="product-info smart-form">
          <div class="row">
            <div class="col-md-12"> 
            <button class="btn btn-danger my-cart-btn btn-agregar1" data-id="2" data-name="Chorizo poblano" data-summary="summary 2" data-price="50" data-quantity="1" data-image="descarga.jpg">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end product -->
</div>
<div class="col-xs-12 col-md-6">
  <!-- First product box start here-->
  <div class="prod-info-main prod-wrap clearfix">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="product-image"> 
            <img src="salchicha.jpg" class="img-responsive rotprod"> 
            <span class="tag3 special">
              Especial
            </span> 
          </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="product-deatil">
            <h5 class="name">
              <a href="#">
                23129
                 <span>Salchichoneria</span>
                 <input type="text" value="30" name="" hidden class="producto2">
              </a>
            </h5>
            <p class="price-container">
              <span>$30</span>
            </p>
            <span class="tag1"></span> 
        </div>
        <div class="description">
          <p>Salchicha </p>
        </div>
        <div class="product-info smart-form">
          <div class="row">
            <div class="col-md-12"> 
            <button class="btn btn-danger my-cart-btn btn-agregar2" data-id="3" data-name="Salchicha" data-summary="summary 3" data-price="30" data-quantity="1" data-image="salchicha.jpg">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- end product -->
</div>
<div class="col-xs-12 col-md-6">
  <!-- First product box start here-->
  <div class="prod-info-main prod-wrap clearfix">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="product-image"> 
            <img src="quesocerdo.jpg" alt="194x228" class="img-responsive rotprod"> 
            <span class="tag2 sale">
              SALE
            </span> 
          </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="product-deatil">
            <h5 class="name">
              <a href="#">
                12314 <span>Salchichoneria</span>
                <input type="text" value="15" name="" hidden class="producto3">
              </a>
            </h5>
            <p class="price-container">
              <span>$15</span>
            </p>
            <span class="tag1"></span> 
        </div>
        <div class="description">
          <p>Queso de cerdo</p>
        </div>
        <div class="product-info smart-form">
          <div class="row">
            <div class="col-md-12"> 
            <button class="btn btn-danger my-cart-btn btn-agregar3" data-id="4" data-name="Queso de cerdo" data-summary="summary 4" data-price="15" data-quantity="1" data-image="quesocerdo.jpg">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>
<div class="col-xs-12 col-md-6">
  <!-- end product -->
  <!-- First product box start here-->
  <div class="prod-info-main prod-wrap clearfix">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="product-image"> 
            <img src="textu.jpg" class="img-responsive rotprod"> 
            <span class="tag2 hot">
              HOT
            </span> 
          </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="product-deatil">
            <h5 class="name">
              <a href="#">
                1313
              </a>
              <a href="#">
                <span>Farmacia</span>
              </a>                            

            </h5>
            <p class="price-container">
              <span>$99</span>
              <input type="text" value=99" name="" hidden class="producto5">
            </p>
            <span class="tag1"></span> 
        </div>
        <div class="description">
          <p>Condones MForce</p>
        </div>
        <div class="product-info smart-form">
          <div class="row">
            <div class="col-md-12"> 
            <button class="btn btn-danger my-cart-btn btn-agregar5" data-id=4" data-name="Condones MForce" data-summary="summary 4" data-price="99" data-quantity="1" data-image="textu.jpg">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
  <!-- end product -->
<div class="col-xs-12 col-md-6">
    <!-- First product box start here-->
  <div class="prod-info-main prod-wrap clearfix">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="product-image"> 
            <img src="chela.jpg" alt="194x228" class="img-responsive rotprod"> 
            <span class="tag2 sale">
              SALE
            </span> 
          </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="product-deatil">
            <h5 class="name">
              <a href="#">
                76512 <span>Vinos/licores</span>
                <input type="text" value="200" name="" hidden class="producto8">
              </a>
            </h5>
            <p class="price-container">
              <span>$200</span>
            </p>
            <span class="tag1"></span> 
        </div>
        <div class="description">
          <p>Variedad de cervezas</p>
        </div>
        <div class="product-info smart-form">
          <div class="row">
            <div class="col-md-12"> 
            <button class="btn btn-danger my-cart-btn btn-agregar8" data-id="8" data-name="Cervezas" data-summary="summary 8" data-price="200" data-quantity="1" data-image="chela.jpg">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- end product -->



</div>
<div class="col-xs-12 col-md-6">
    <!-- First product box start here-->
  <div class="prod-info-main prod-wrap clearfix">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="product-image"> 
            <img src="sabras.jpg" alt="194x228" class="img-responsive rotprod"> 
            <span class="tag2 sale">
              SALE
            </span> 
          </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="product-deatil">
            <h5 class="name">
              <a href="#">
                71328 <span>Frituras</span>
                <input type="text" value="20" name="" hidden class="producto6">
              </a>
            </h5>
            <p class="price-container">
              <span>$20</span>
            </p>
            <span class="tag1"></span> 
        </div>
        <div class="description">
          <p>Sabrita</p>
        </div>
        <div class="product-info smart-form">
          <div class="row">
            <div class="col-md-12"> 
            <button class="btn btn-danger my-cart-btn btn-agregar6" data-id="6" data-name="Sabritas" data-summary="summary 6" data-price="20" data-quantity="1" data-image="sabras.jpg">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- end product -->



</div>
<div class="col-xs-12 col-md-6">
    <!-- First product box start here-->
  <div class="prod-info-main prod-wrap clearfix">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="product-image"> 
            <img src="chescos.jpg" alt="194x228" class="img-responsive rotprod"> 
            <span class="tag2 sale">
              SALE
            </span> 
          </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="product-deatil">
            <h5 class="name">
              <a href="#">
                12312 <span>Bebidas</span>
                <input type="text" value="15" name="" hidden class="producto7">
              </a>
            </h5>
            <p class="price-container">
              <span>$15</span>
            </p>
            <span class="tag1"></span> 
        </div>
        <div class="description">
          <p>Variedad de bebidas</p>
        </div>
        <div class="product-info smart-form">
          <div class="row">
            <div class="col-md-12"> 
            <button class="btn btn-danger my-cart-btn btn-agregar7" data-id="7" data-name="Refresco" data-summary="summary 7" data-price="15" data-quantity="1" data-image="chescos.jpg">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- end product -->



</div>


</section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->


        
</div>


        
</div>
</div>
</body>
    </section> 
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script src="../js/jquery-2.2.3.min.js"></script>
  <script type='text/javascript' src="../js/bootstrap.min.js"></script>
  <script type='text/javascript' src="../js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {
    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      currencySymbol: '$',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      numberOfDecimals: 2,
      cartItems: [
        /*{id: 1, name: 'product 1', summary: 'summary 1', price: 10, quantity: 1, image: 'images/img_1.png'},
        {id: 2, name: 'product 2', summary: 'summary 2', price: 20, quantity: 2, image: 'images/img_2.png'},
        {id: 3, name: 'product 3', summary: 'summary 3', price: 30, quantity: 1, image: 'images/img_3.png'}*/
      ],
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
        $.each(products, function(){
          checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
        });
        alert(checkoutString)
        console.log("checking out", products, totalPrice, totalQuantity);
      },
    });

    
    $( ".btn-agregar" ).click(function() {
        var total =  parseInt($( ".valor_presupuesto" ).val());
        var precio = parseInt($( ".producto" ).val());
        total = total - precio;
        if(total<=0){
          swal("Lo siento", "Tu presupuesto se ha terminado!", "error");
        }else{
          
          $(".presupuesto").text(total);
          $( ".valor_presupuesto" ).val(total);
        }
        
    });
        $( ".btn-agregar1" ).click(function() {
        var total =  parseInt($( ".valor_presupuesto" ).val());
        var precio = parseInt($( ".producto1" ).val());
        total = total - precio;
        if(total<=0){
          swal("Lo siento", "Tu presupuesto se ha terminado!", "error");
        }else{
          
          $(".presupuesto").text(total);
          $( ".valor_presupuesto" ).val(total);
        }
        
    });
        $( ".btn-agregar2" ).click(function() {
        var total =  parseInt($( ".valor_presupuesto" ).val());
        var precio = parseInt($( ".producto2" ).val());
        total = total - precio;
        if(total<=0){
          swal("Lo siento", "Tu presupuesto se ha terminado!", "error");
        }else{
          
          $(".presupuesto").text(total);
          $( ".valor_presupuesto" ).val(total);
        }
        
    });
        $( ".btn-agregar3" ).click(function() {
        var total =  parseInt($( ".valor_presupuesto" ).val());
        var precio = parseInt($( ".producto3" ).val());
        total = total - precio;
        if(total<=0){
          swal("Lo siento", "Tu presupuesto se ha terminado!", "error");
        }else{
          
          $(".presupuesto").text(total);
          $( ".valor_presupuesto" ).val(total);
        }
        
    });
        $( ".btn-agregar4" ).click(function() {
        var total =  parseInt($( ".valor_presupuesto" ).val());
        var precio = parseInt($( ".producto4" ).val());
        total = total - precio;
        if(total<=0){
          swal("Lo siento", "Tu presupuesto se ha terminado!", "error");
        }else{
          
          $(".presupuesto").text(total);
          $( ".valor_presupuesto" ).val(total);
        }
        
    });
        $( ".btn-agregar5" ).click(function() {
        var total =  parseInt($( ".valor_presupuesto" ).val());
        var precio = parseInt($( ".producto5" ).val());
        total = total - precio;
        if(total<=0){
          swal("Lo siento", "Tu presupuesto se ha terminado!", "error");
        }else{
          
          $(".presupuesto").text(total);
          $( ".valor_presupuesto" ).val(total);
        }
        
    });
        $( ".btn-agregar6" ).click(function() {
        var total =  parseInt($( ".valor_presupuesto" ).val());
        var precio = parseInt($( ".producto6" ).val());
        total = total - precio;
        if(total<=0){
          swal("Lo siento", "Tu presupuesto se ha terminado!", "error");
        }else{
          
          $(".presupuesto").text(total);
          $( ".valor_presupuesto" ).val(total);
        }
        
    });
        $( ".btn-agregar7" ).click(function() {
        var total =  parseInt($( ".valor_presupuesto" ).val());
        var precio = parseInt($( ".producto7" ).val());
        total = total - precio;
        if(total<=0){
          swal("Lo siento", "Tu presupuesto se ha terminado!", "error");
        }else{
          
          $(".presupuesto").text(total);
          $( ".valor_presupuesto" ).val(total);
        }
        
    });

        $( ".btn-agregar8" ).click(function() {
        var total =  parseInt($( ".valor_presupuesto" ).val());
        var precio = parseInt($( ".producto8" ).val());
        total = total - precio;
        if(total<=0){
          swal("Lo siento", "Tu presupuesto se ha terminado!", "error");
        }else{
          
          $(".presupuesto").text(total);
          $( ".valor_presupuesto" ).val(total);
        }
        
    });
  });
  </script>
</body>
</html>
