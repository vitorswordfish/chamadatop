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

    <!-- Datatables -->
    <link href="dist/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="dist/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="dist/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="dist/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="dist/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
                      <li><a href="index.php">Matérias</a></li>
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
            <div class="page-title">
              <div class="title_left">
                <h3> - </h3>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Matérias</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li>     
                      <!-- Botão Modal Turma -->
                      <button type="button" class="btn btn-primary adicionar" data-toggle="modal" data-target="#modalAdicionar">Preencher Alunos</button>
                      <!-- /Botão Modal Turma -->
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <p class="text-muted font-13 m-b-30">
                    
                  </p>

<!-- Modal -->
<div class="modal fade" id="modalAdicionar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar aluno na Matéria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <form>
      <div class="form-group">
        <label for="exampleInputCodigo">Matrícula do aluno</label>
        <input type="codigo" class="form-control" id="exampleInputMatricula" placeholder="180124561">
      </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Matéria</label>
      <select class="form-control" id="exampleFormMateria">
      <option>ALGORITMOS E ESTRUTURA DE DADOS</option>
      <option>ANALISE DE SISTEMAS DE POTENCIA</option>
      <option>ANÁLISE DINÂMICA LINEAR</option>
      <option>ARQUITETURA E PROTOCOLOS DE REDES</option>
      <option>AVALIAÇÃO DE DESEMPENHO DE REDES E SISTEMAS</option>
      <option>CIRCUITOS ELÉTRICOS </option>
      <option>CIRCUITOS ELÉTRICOS 1 </option>
      <option>CIRCUITOS ELÉTRICOS 2 </option>
      <option>CIRCUITOS POLIFASICOS </option>
      <option>COMPUTACAO PARA ENGENHARIA  </option>
      <option>COMUNICACOES DIGITAIS </option>
      <option>CONTROLE DE PROCESSOS </option>
      <option>CONTROLE DIGITAL  </option>
      <option>CONTROLE DINÂMICO </option>
      <option>CONTROLE PARA AUTOMAÇÃO </option>
      <option>CONVERSÃO DE ENERGIA E MÁQUINAS ELÉTRICAS </option>
      <option>CONVERSÃO ELETROMECÂNICA DE ENERGIA </option>
      <option>ELETRICIDADE BÁSICA </option>
      <option>ELETROMAGNETISMO 1  </option>
      <option>ELETROMAGNETISMO 2  </option>
      <option>ELETRÔNICA  </option>
      <option>ELETRÔNICA 2  </option>
      <option>ESTÁGIO SUPERVISIONADO EM ENGENHARIA DE COMPUTAÇÃO 1  </option>
      <option>ESTÁGIO SUPERVISIONADO EM ENGENHARIA DE COMPUTAÇÃO 2  </option>
      <option>ESTÁGIO SUPERVISIONADO EM ENGENHARIA DE REDES DE COMUNICAÇÃO  </option>
      <option>FOTÔNICA BÁSICA </option>
      <option>FUNDAMENTOS DE REDES  </option>
      <option>FUNDAMENTOS DE REDES 2  </option>
      <option>INSTALAÇÕES ELÉTRICAS </option>
      <option>INSTRUMENTACAO DE CONTROLE  </option>
      <option>INSTRUMENTAÇÃO DE CONTROLE DE PROCESSOS </option>
      <option>INTRODUÇÃO A ENGENHARIA DE REDES DE COMUNICACÃO </option>
      <option>INTRODUCAO A ENGENHARIA ELETRICA  </option>
      <option>INTRODUÇÃO AO CONTROLE INTELIGENTE NUMÉRICO </option>
      <option>INTRODUCAO AO PROJETO DE CIRCUITOS INTEGRADOS </option>
      <option>INTRODUÇÃO AOS CIRCUITOS ELÉTRICOS  </option>
      <option>LABORATÓRIO DE ANÁLISE DINÂMICA LINEAR  </option>
      <option>LABORATÓRIO DE CIRCUITOS ELÉTRICOS  </option>
      <option>LABORATÓRIO DE CIRCUITOS ELÉTRICOS 1  </option>
      <option>LABORATÓRIO DE CIRCUITOS ELÉTRICOS 2  </option>
      <option>LABORATÓRIO DE CONTROLE DE PROCESSOS  </option>
      <option>LABORATÓRIO DE CONTROLE DINÂMICO  </option>
      <option>LABORATÓRIO DE CONVERSÃO DE ENERGIA </option>
      <option>LABORATÓRIO DE CONVERSÃO ELETROMECÂNICA DE ENERGIA  </option>
      <option>LABORATÓRIO DE ELETRICIDADE BÁSICA  </option>
      <option>LABORATÓRIO DE ELETROMAGNETISMO 2 </option>
      <option>LABORATÓRIO DE ELETRÔNICA </option>
      <option>LABORATÓRIO DE ELETRÔNICA 2 </option>
      <option>LABORATÓRIO DE INSTALAÇÕES ELÉTRICAS  </option>
      <option>LABORATÓRIO DE MATERIAIS ELÉTRICOS E MAGNÉTICOS </option>
      <option>LABORATÓRIO DE PRINCÍPIOS DE COMUNICAÇÃO  </option>
      <option>LABORATÓRIO DE REDES  </option>
      <option>LABORATÓRIO DE SISTEMAS DIGITAIS  </option>
      <option>LABORATÓRIO DE SISTEMAS ELÉTRICOS DE POTÊNCIA </option>
      <option>LABORATÓRIO DE SISTEMAS MICROPROCESSADOS  </option>
      <option>MATERIAIS ELÉTRICOS E MAGNÉTICOS  </option>
      <option>METODOLOGIA E DESENVOLVIMENTO DE SOFTWARE </option>
      <option>PRINCÍPIOS DE COMUNICAÇÃO </option>
      <option>PROJETO FINAL DE GRADUAÇÃO 1  </option>
      <option>PROJETO FINAL DE GRADUAÇÃO 2  </option>
      <option>PROJETO FINAL EM ENGENHARIA DE COMPUTAÇÃO 1 </option>
      <option>PROJETO FINAL EM ENGENHARIA DE COMPUTAÇÃO 2 </option>
      <option>PROJETO TRANSVERSAL EM REDES DE COMUNICAÇÃO 1 </option>
      <option>PROJETO TRANSVERSAL EM REDES DE COMUNICAÇÃO 2 </option>
      <option>PROPAGACAO DE ONDAS ELETROMAGNETICAS  </option>
      <option>PROTECAO DE SISTEMAS ELETRICOS  </option>
      <option>PROTOCOLOS DE TRANSPORTE E ROTEAMENTO </option>
      <option>REDES LOCAIS  </option>
      <option>REDES SEM FIO </option>
      <option>SEGURANÇA DE REDES  </option>
      <option>SINAIS E SISTEMAS EM TEMPO CONTÍNUO </option>
      <option>SINAIS E SISTEMAS EM TEMPO DISCRETO </option>
      <option>SISTEMAS DE COMUNICACOES 1  </option>
      <option>SISTEMAS DE INFORMAÇÃO DISTRIBUÍDOS </option>
      <option>SISTEMAS DIGITAIS </option>
      <option>SISTEMAS DIGITAIS 2 </option>
      <option>SISTEMAS MICROPROCESSADOS </option>
      <option>SISTEMAS OPERACIONAIS DE REDES  </option>
      <option>TOPICOS EM ENGENHARIA </option>
      <option>TÓPICOS EM REDES DE COMUNICAÇÃO 3 </option>
      <option>TÓPICOS ESPECIAIS EM ENGENHARIA BIOMÉDICA </option>
      <option>TRABALHO DE CONCLUSÃO DE CURSO 1</option>
      <option>TRABALHO DE CONCLUSÃO DE CURSO 2</option>
      </select>
      </div>

      <div class="form-group">
        <label for="exampleInputTurma">Turma</label>
      <select class="form-control" id="exampleForTurma">
      <option>A</option>
      <option>B</option>
      <option>C</option>
      <option>D</option>
      <option>E</option>
      <option>F</option>
      <option>G</option>
      <option>H</option>
      <option>I</option>
      <option>J</option>
      <option>K</option>
      <option>L</option>
      <option>M</option>
      <option>N</option>
      <option>O</option>
      <option>P</option>
      <option>Q</option>
      <option>R</option>
      <option>S</option>
      <option>T</option>
      <option>U</option>
      <option>V</option>
      <option>X</option>
      <option>W</option>
      <option>Y</option>
      <option>Z</option>
      </select>
      </div>

        <button type="submit" class="btn btn-primary">Adicionar na turma</button>
      </form>        




      </div>
    </div>
  </div>
</div>
<!-- /Modal -->


                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Código</th>
                        <th>Matéria</th>
                        <th>Departamento</th>
                        <th>Código do Departamento</th>
                        <th>Turma</th>
                        <th>Créditos</th>
                        <th>Horário</th>
                        <th>Vagas</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>Projeto Transversal</td>
                        <td>109592</td>
                        <td>ENE</td>
                        <td>163</td>
                        <td>A</td>
                        <td>seg-14/quar-14</td>
                        <td>4</td>
                        <td>30</td>
                      </tr>
                    </tbody>

                  </table>

        
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

    <!-- Datatables -->
    <script src="dist/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="dist/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="dist/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="dist/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="dist/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="dist/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="dist/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="dist/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="dist/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="dist/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="dist/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="dist/vendors/jszip/dist/jszip.min.js"></script>
    <script src="dist/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="dist/vendors/pdfmake/build/vfs_fonts.js"></script>

    <script type="text/javascript">
      
      $(document).ready(function() {
$('#datatable-responsive').dataTable( {
    paging: false,
    searching: false
} );

      
    </script>

  </body>
</html>
