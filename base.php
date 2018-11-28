<!-- Navbar-->
<header class="main-header hidden-print"><a class="logo" href="../index.php"><img src="../build/images/logo-config.png"   height="30" width="100" style="margin-bottom: 12px;"></a>
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
    <!-- Navbar Right Menu-->
    <div class="navbar-custom-menu">
      <ul class="top-nav">

        <!-- User Menu-->
        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu">
            <li><a href="../profile.php"><i class="fa fa-user fa-lg"></i> Ver Perfil</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Side-Nav-->
<aside class="main-sidebar hidden-print">
  <section class="sidebar">

    <div class="user-panel">

      <?php

        include 'config.php';
        $usuario = $_SESSION['usuario'];
        $sql = "SELECT * FROM users WHERE (username = '$usuario') ";
        $resultado = mysqli_query($conexion, $sql) or die("Error en consulta");

        while ($columna = mysqli_fetch_array($resultado))
        {
          echo "<div class='pull-left image'><img class='img-circle' src='".$columna['foto']." '></div>";
          echo " <div class='pull-left info'>";
            echo "<p>".$columna['fullname']."</p>";
            if($columna['usertype'] == 1)
            {echo "<p class='designation'>Administrador</p>";}
          echo "</div>";
          $_SESSION['usertype'] = $columna['usertype'];
        }
      ?>

    </div>

    <!-- Sidebar Menu-->
    <ul class="sidebar-menu">
      <li class="active"><a href="../account/profile.php"><i class="fa fa-dashboard"></i><span>Home</span></a></li>
     <!-- <li><a href="../servicios/servicios.php"><i class="fa fa-briefcase"></i><span>Servicios</span></a></li> -->
        <li><a href="../servicios/cambios_galeria.php"><i class="fa fa-briefcase"></i><span>Galeria</span></a></li>
      <?php
        if ($_SESSION['usertype'] == 1) {
      echo "<li><a href='../usuarios/lista-usuarios.php'><i class='fa fa-users'></i><span>Usuarios</span></a></li>";
        }
      ?>

    </ul>
  </section>
</aside>

<script type="text/javascript">
  var _smartsupp = _smartsupp || {};
  _smartsupp.key = 'f8438d1850f3f010b7b2d7b2dd5509151df023ca';
  $( ".chat" ).click(function() {
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    smartsupp('chat:open');
  });
</script>
