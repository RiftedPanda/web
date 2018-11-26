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
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><i class="fa fa-shopping-cart"></i> <span class="total_compras_usuario">  </span></h3>

              <p>Total de compras</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box  bg-yellow">
            <div class="inner">
              <h3><i class="fa fa-dollar"></i> <span class="total_gastos_usuario">  </span></h3>

              <p>Total Gastado</p>
            </div>
            <div class="icon">
              <i class="fa fa-dollar"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
          <a href="#">
            <img src="zague.jpg" width="100%">
          </a>
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-shopping-cart"></i>

              <h3 class="box-title">Estadísticas Compras</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="bar-chart" style="height: 300px;"></div>
            </div>
            
          </div>
        </div>

        <div class="col-md-6">
          <!-- Bar chart -->
          <div class="box box-success">
            <div class="box-header with-border">
              <i class="fa fa-dollar"></i>

              <h3 class="box-title">Estadísticas Gastos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="bar-chart2" style="height: 300px;"></div>
            </div>
            
          </div>
        </div>

        <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Todas mis compras</h3>
            </div>
            
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    
                    <th>Total</th>
                    <th>Fecha</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $user_mp = $_SESSION['usuario'];
                    $sql = "SELECT * FROM compras WHERE usuario = '$user_mp' ";
                    $result = $conn->query($sql);

                    $total_compras = 0;
                    $total_gastado = 0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>$".$row["total"]."</td>";
                            echo "<td>".$row["dia"]."/".$row["mes"]."/".$row["year"]."</td>";
                            echo "<td><a href='ver-compra.php?id=".$row['id']."' class='btn btn-success'>Ver Compra</button></td>";
                            echo "<input type='text' class='mes' data-total='".$row["total"]."'  value='".$row["mes"]."' hidden>";
                            $total_gastado = $total_gastado + $row["total"];
                            $total_compras = $total_compras + 1;
                            echo "</tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                      echo "<input type='text' class='total_gastado'  value='".$total_gastado."' hidden>";
                      echo "<input type='text' class='total_compras'  value='".$total_compras."' hidden>";

                      $conn->close();
                  ?>
                </tbody>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

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

    var total_compras = $(".total_compras").val();
    var total_gastado = $(".total_gastado").val();
    $(".total_compras_usuario").text(total_compras);
    $(".total_gastos_usuario").text(total_gastado);

    /*BAR CHART*/
    var enero = 0;
    var febrero = 0;
    var marzo = 0;
    var abril = 0;
    var mayo = 0;
    var junio = 0;
    var julio = 0;
    var agosto = 0;
    var septiembre = 0;
    var octubre = 0;
    var noviembre = 0;
    var diciembre = 0;

    var enero_total = 0;
    var febrero_total = 0;
    var marzo_total = 0;
    var abril_total = 0;
    var mayo_total = 0;
    var junio_total = 0;
    var julio_total = 0;
    var agosto_total = 0;
    var septiembre_total = 0;
    var octubre_total = 0;
    var noviembre_total = 0;
    var diciembre_total = 0;

    var compras = $('.mes').map(function(idx, elem) {
      
      if ($(elem).val() == "1") {//$( elem ).attr( "checked" )
        enero = enero +1;
        enero_total = enero_total + $( elem ).attr("data-total");
      }else if($(elem).val() == "2"){
        febrero = febrero +1;
        febrero_total = febrero_total + $( elem ).attr("data-total");
      }else if($(elem).val() == "3"){
        marzo = marzo +1;
        marzo_total = marzo_total + $( elem ).attr("data-total");
      }else if($(elem).val() == "4"){
        abril = abril +1;
        abril_total = abril_total + $( elem ).attr("data-total");
      }else if($(elem).val() == "5"){
        mayo = mayo +1;
        mayo_total = mayo_total + $( elem ).attr("data-total");
      }else if($(elem).val() == "6"){
        junio = junio +1;
        junio_total = junio_total + $( elem ).attr("data-total");
      }else if($(elem).val() == "7"){
        julio = julio +1;
        julio_total = julio_total + $( elem ).attr("data-total");
      }else if($(elem).val() == "8"){
        agosto = agosto +1;
        agosto_total = agosto_total + $( elem ).attr("data-total");
      }else if($(elem).val() == "9"){
        septiembre = septiembre +1;
        septiembre_total = septiembre_total + $( elem ).attr("data-total");
      }else if($(elem).val() == "10"){
        octubre = octubre +1;
        octubre_total = octubre_total + $( elem ).attr("data-total");
      }else if($(elem).val() == "11"){
        noviembre = noviembre +1;
        noviembre_total = noviembre_total + $( elem ).attr("data-total");
      }else if($(elem).val() == "12"){
        diciembre = diciembre +1;
        diciembre_total = diciembre_total + $( elem ).attr("data-total");
      }
      return $(elem).val();
    }).get();
    console.log(enero);

    //COMPRAS
    var bar_data = {
      data : [['Ene', enero], ['Feb', febrero], ['Mar', marzo], ['Abr', abril], ['May', mayo], ['Jun', junio], ['Jul', julio], ['Ago', agosto], ['Sep', ], ['Oct', octubre], ['Nov', noviembre], ['Dic', diciembre]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }

    });

    //GASTOS
    var bar_data2 = {
      data : [['Ene', enero_total], ['Feb', febrero_total], ['Mar', marzo_total], ['Abr', abril_total], ['May', mayo_total], ['Jun', junio_total], ['Jul', julio_total], ['Ago', agosto_total], ['Sep', septiembre_total], ['Oct', octubre_total], ['Nov', noviembre_total], ['Dic', diciembre_total]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart2', [bar_data2], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center',
          color : '#f39c12',
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    });

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
