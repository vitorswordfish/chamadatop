<?php

  session_start();

  date_default_timezone_set('America/Sao_Paulo');

  if(!isset($_SESSION['matricula'])){
    header('Location: ../../erro.php');
  }

  $matricula = $_SESSION['matricula'];
  $horario = $_SESSION['horario'];
  $id_aluno = $_SESSION['id_aluno'];
  $id_turma = $_SESSION['id_turma'];
  $criptar = sha1($matricula.date('l jS \of F Y z').$horario);


  switch($horario){
      case 1:
        $start = '09:20:00';
        $end = '10:00:00';
        $now = 'now';
        break;
      case 2:
        $start = '11:20:00';
        $end = '12:00:00';
        $now = date("H:i:s");
        break;
      case 3:
        $start = '13:00:00';
        $end = '14:00:00';
        $now = date("H:i:s");
        break;
      case 4:
        $start = '15:20:00';
        $end = '16:00:00';
        $now = date("H:i:s");
        break;
      case 5:
        $start = '17:20:00';
        $end = '18:00:00';
        $now = date("H:i:s");
        break;
      case 6:
        $start = '21:50:00';
        $end = '22:40:00';
        $now = date("H:i:s");
        break;
    }


  // Função
function intervaloEntreDatas($inicio, $fim, $agora) {
   $inicioTimestamp = strtotime($inicio);
   $fimTimestamp = strtotime($fim);
   $agoraTimestamp = strtotime($agora);
   return (($agoraTimestamp >= $inicioTimestamp) && ($agoraTimestamp <= $fimTimestamp));
}


// Chamada
if(intervaloEntreDatas($start,$end,$now)){
    $code = '<center><img src="https://chart.googleapis.com/chart?chs=400x400&chld=H&cht=qr&chl='.$criptar.'" title="Link to Google.com"></center>';

  require_once('../../system/controllers/db.class.php');
  $objDb = new db();
  $link = $objDb->conecta_mysql();


  $sql = " select * from sessoes where token = '$criptar' AND alunos_id_aluno = '$id_aluno'";
  if($resultado_id = mysqli_query($link, $sql)) {
    $dados_usuario = mysqli_fetch_array($resultado_id);
    if($dados_usuario['token'] == $criptar){ //tratamento: yoken ja existe
      //pular a inserção de novo token
    }else{
      //cria o token
      $sql2 = " insert into sessoes (turmas_id_materias, alunos_id_aluno, hora, presenca, token) values ('$id_turma', '$id_aluno', '$horario', '0', '$criptar')";
      if(mysqli_query($link, $sql2)){
        //sucesso
      } else {
        //falha
        header('Location: ../../?fb=2');
      }

    }

  }
}else{
  header('Location:../../?fb=3');
}
  

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Eyecom</title>

    <!-- Bootstrap -->
    <link href="../dist/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../dist/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../dist/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../dist/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../dist/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../dist/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../dist/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../dist/build/css/custom.css" rel="stylesheet">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">


            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem-vindo(a),</span>
                <h2>Professor</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>GERAL</h3>

                <ul class="nav side-menu">


                  <!-- Servidores -->
                  <li><a><i class="fa fa-database"></i> Chamada <span class="fa fa-chevron-down"></span></a>
                  </li>



                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="" href="">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Perfil" href="#">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Blog" href="blog/">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Sair" href="#">
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Professor
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="#"> Perfil</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div>
            <?php echo $code; ?>
          </div>


        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright © Vítor Soares 2018. Todos os direitos reservados
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../dist/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../dist/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../dist/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../dist/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../dist/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../dist/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../dist/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../dist/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../dist/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../dist/vendors/Flot/jquery.flot.js"></script>
    <script src="../dist/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../dist/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../dist/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../dist/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../dist/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../dist/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../dist/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../dist/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../dist/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../dist/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../dist/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../dist/vendors/moment/min/moment.min.js"></script>
    <script src="../dist/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../dist/build/js/custom.min.js"></script>
  </body>
</html>