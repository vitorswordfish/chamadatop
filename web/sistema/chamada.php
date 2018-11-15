<?php
  /*
  session_start();

  require_once('system/controllers/zilla/Usuário/verificacao.php');*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Eyecom</title>

    <!-- Bootstrap -->
    <link href="dist/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="dist/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="dist/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="dist/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="dist/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="dist/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="dist/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="dist/build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">


            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
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


                  <!-- Docente -->
                  <li><a><i class="fa fa-book"></i> Professor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="materiasprofessor.php">Matérias</a></li>
                      <li><a href="chamada.php">Lista de Presença</a></li>
                    </ul>
                  </li>

                  <!-- Discente -->
                  <li><a><i class="fa fa-pencil"></i> Aluno <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="materiasaluno.php">Matérias</a></li>
                    </ul>
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

<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Lista de Presença</h2>
      
      
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <p class="text-muted font-13 m-b-30">
        
      </p>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Projeto Transversal</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Matricula</th>
              <th>Turma</th>
              <th>Presente</th>
            </tr>
          </thead>


          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>140132566</td>
              <td>A</td>
              <td> Sim </td>
              
            </tr>
           
          </tbody>
        </table>
      </div>
     </div>
    </div>
  </div>



<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Sinais</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Matricula</th>
              <th>Turma</th>
              <th>Presente</th>
            </tr>
          </thead>


          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>140132566</td>
              <td>A</td>
              <td> Sim </td>
              
            </tr>
            <tr>
              <td>José Alencar</td>
              <td>130122566</td>
              <td>A</td>
              <td> Não </td>
              
            </tr>
            <tr>
              <td>Tiago Ferreira</td>
              <td>130134456</td>
              <td>A</td>
              <td> Não</td>
              
            </tr>
            <tr>
              <td>Mariana Castro</td>
              <td>140133686</td>
              <td>A</td>
              <td> Não </td>
              
            </tr>

          </tbody>
        </table>
      </div>
     </div>
    </div>
  </div>
    


<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Computação para Engenharia</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Matricula</th>
              <th>Turma</th>
              <th>Presente</th>
            </tr>
          </thead>


          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>140132566</td>
              <td>A</td>
              <td> Sim </td>
              
            </tr>
            <tr>
              <td>José Alencar</td>
              <td>130122566</td>
              <td>A</td>
              <td> Não </td>
              
            </tr>
            <tr>
              <td>Tiago Ferreira</td>
              <td>130134456</td>
              <td>A</td>
              <td> Não</td>
              
            </tr>
            <tr>
              <td>Mariana Castro</td>
              <td>140133686</td>
              <td>A</td>
              <td> Não </td>
              
            </tr>

          </tbody>
        </table>
      </div>
     </div>
    </div>
  </div>
    

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Algoritmo e Estrutura de Dados</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Matricula</th>
              <th>Turma</th>
              <th>Presente</th>
            </tr>
          </thead>


          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>140132566</td>
              <td>A</td>
              <td> Sim </td>
              
            </tr>
            <tr>
              <td>José Alencar</td>
              <td>130122566</td>
              <td>A</td>
              <td> Não </td>
              
            </tr>
            <tr>
              <td>Tiago Ferreira</td>
              <td>130134456</td>
              <td>A</td>
              <td> Não</td>
              
            </tr>
            <tr>
              <td>Mariana Castro</td>
              <td>140133686</td>
              <td>A</td>
              <td> Não </td>
              
            </tr>

          </tbody>
        </table>
      </div>
     </div>
    </div>
  </div>
    
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright © EyeCom 2018. Todos os direitos reservados
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="dist/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="dist/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="dist/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="dist/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="dist/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="dist/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="dist/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="dist/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="dist/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="dist/vendors/Flot/jquery.flot.js"></script>
    <script src="dist/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="dist/vendors/Flot/jquery.flot.time.js"></script>
    <script src="dist/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="dist/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="dist/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="dist/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="dist/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="dist/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="dist/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="dist/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="dist/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="dist/vendors/moment/min/moment.min.js"></script>
    <script src="dist/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="dist/build/js/custom.min.js"></script>

  </body>
</html>
