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
                      <!-- Botão Modal -->
                      <button type="button" class="btn btn-primary adicionar" data-toggle="modal" data-target="#modalExemplo">Adicionar Matéria</button>
                      <!-- /Botão Modal -->
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <p class="text-muted font-13 m-b-30">
                    
                  </p>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Matéria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <form>
      <div class="form-group">
        <label for="exampleInputCodigo">Código da Matéria</label>
        <input type="codigo" class="form-control" id="exampleInputCodigo" placeholder="109592">
      </div>

      <div class="form-group">
        <label for="exampleInputMateria">Matéria</label>
        <input type="materia" class="form-control" id="exampleInputMateria" placeholder="Projeto Transversal">
      </div>
      
      
      <div class="form-group">
      <label for="exampleFormControlSelect1">Departamento</label>
      <select class="form-control" id="exampleFormDepartamento">
      
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      </div>
      
      
      <div class="form-group">
        <label for="exampleInputDepartamento">Departamento</label>
        <input type="departamento" class="form-control" id="exampleInputDepartamento" placeholder="ENE">
      </div>

      <div class="form-group">
        <label for="exampleInputCodDepartamento">Código do Departamento</label>
        <input type="coddepartamento" class="form-control" id="exampleInputCodDepartamento" placeholder="163">
      </div>

      <div class="form-group">
        <label for="exampleInputTurma">Turma</label>
        <input type="turma" class="form-control" id="exampleInputTurma" placeholder="A">
      </div>

      <div class="form-group">
        <label for="exampleInputCredito">Credito</label>
        <input type="credito" class="form-control" id="exampleInputCredito" placeholder="4">
      </div>

      <div class="form-group">
        <label for="exampleInputHorario">Horário</label>
        <input type="horario" class="form-control" id="exampleInputHorario" placeholder="seg-14/quar-14">
      </div>
      
      <div class="form-group">
        <label for="exampleInputVagas">Número de Vagas</label>
        <input type="vagas" class="form-control" id="exampleInputVagas" placeholder="30">
      </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
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

                  <!-- Modal de adição -->
                  <div class="modal fade bs-example-modal-lg" id="modal-adicao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">


                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Adicionar</h4>
                        </div>
                        <div class="modal-body">

                          <form id="formulario" method="POST" action="teste.php">
                          <!-- Smart Wizard -->
                          <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                              <li>
                                <a href="#step-1">
                                  <span class="step_no">1</span>
                                  <span class="step_descr">
                                                    Passo 1<br />
                                                    <small>Informações Gerais</small>
                                                </span>
                                </a>
                              </li>
                              <li>
                                <a href="#step-2">
                                  <span class="step_no">2</span>
                                  <span class="step_descr">
                                                    Passo 2<br/>
                                                    <small>Pautas e Resoluções</small>
                                                </span>
                                </a>
                              </li>
                              <li>
                                <a href="#step-3">
                                  <span class="step_no">3</span>
                                  <span class="step_descr">
                                                    Passo 3<br />
                                                    <small>Finalização</small>
                                                </span>
                                </a>
                              </li>
                            </ul>
                            <div id="step-1">

                              <div class="form-horizontal form-label-left">

                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Título da reunião: <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="titulo" required="required" placeholder="Ex: Reunião Semanal, Reunião com a ENETEC..." class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mediador <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="mediador" required="required" placeholder="Quem está coordenando a reunião? Nome e sobrenome!" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Autor da ata <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="autor" placeholder="Quem está fazendo a ata?"  required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Participantes<span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="tags_1" name="participantes" type="text" class="tags form-control" placeholder="Ex: Fulano, Ciclano..."/>
                                    <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de reunião<span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="tiporeuniao">
                                      <option value="diretoria">Diretoria</option>
                                      <option value="cliente">Cliente</option>
                                      <option value="projeto">Projeto</option>
                                      <option value="projeto">MEJ</option>
                                      <option value="extra">Extraordinária</option>
                                      <option value="geral">Geral</option>
                                    </select>
                                  </div>
                                </div>

                              </div>
                            </div>

                            <div id="step-2">



                              <div class="clearfix"></div>
                              <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="x_panel">
                                    <div class="x_content">
                                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Pautas de 1 a 4</a>
                                          </li>
                                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Pautas de 5 a 8</a>
                                          </li>
                                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pautas de 9 a 12</a>
                                          </li>
                                          <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Pautas de 13 a 16</a>
                                          </li>
                                          <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Pautas de 17 a 20</a>
                                          </li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content">

                                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                            <div class="x_content">

                                              <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <blockquote>
                                                    <div class="form-group">
                                                      <label>Pauta nº 01:</label>
                                                      <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p1" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Resolução nº 01:</label>
                                                      <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r1" class="form-control col-md-7 col-xs-12"></textarea>
                                                    </div>
                                                    </blockquote>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <blockquote>
                                                    <div class="form-group">
                                                      <label>Pauta nº 02:</label>
                                                      <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p2" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Resolução nº 02:</label>
                                                      <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r2" class="form-control col-md-7 col-xs-12"></textarea>
                                                    </div>
                                                    </blockquote>
                                                  </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <blockquote>
                                                      <div class="form-group">
                                                        <label>Pauta nº 03:</label>
                                                        <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p3" class="form-control col-md-7 col-xs-12">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Resolução nº 03:</label>
                                                        <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r3" class="form-control col-md-7 col-xs-12"></textarea>
                                                      </div>
                                                      </blockquote>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                      <blockquote>
                                                      <div class="form-group">
                                                        <label>Pauta nº 04:</label>
                                                        <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p4" class="form-control col-md-7 col-xs-12">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Resolução nº 04:</label>
                                                        <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r4" class="form-control col-md-7 col-xs-12"></textarea>
                                                      </div>
                                                      </blockquote>
                                                    </div>
                                                  </div>

                                              </div>





                                          </div>

                                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">


                                            <div class="x_content">

                                              <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <blockquote>
                                                    <div class="form-group">
                                                      <label>Pauta nº 05:</label>
                                                      <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p5" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Resolução nº 05:</label>
                                                      <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r5" class="form-control col-md-7 col-xs-12"></textarea>
                                                    </div>
                                                    </blockquote>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <blockquote>
                                                    <div class="form-group">
                                                      <label>Pauta nº 06:</label>
                                                      <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p6" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Resolução nº 06:</label>
                                                      <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r6" class="form-control col-md-7 col-xs-12"></textarea>
                                                    </div>
                                                    </blockquote>
                                                  </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <blockquote>
                                                      <div class="form-group">
                                                        <label>Pauta nº 07:</label>
                                                        <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p7" class="form-control col-md-7 col-xs-12">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Resolução nº 07:</label>
                                                        <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r7" class="form-control col-md-7 col-xs-12"></textarea>
                                                      </div>
                                                      </blockquote>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                      <blockquote>
                                                      <div class="form-group">
                                                        <label>Pauta nº 08:</label>
                                                        <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p8" class="form-control col-md-7 col-xs-12">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Resolução nº 08:</label>
                                                        <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r8" class="form-control col-md-7 col-xs-12"></textarea>
                                                      </div>
                                                      </blockquote>
                                                    </div>
                                                  </div>

                                              </div>



                                          </div>
                                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">


                                            <div class="x_content">

                                              <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <blockquote>
                                                    <div class="form-group">
                                                      <label>Pauta nº 09:</label>
                                                      <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p9" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Resolução nº 09:</label>
                                                      <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r9" class="form-control col-md-7 col-xs-12"></textarea>
                                                    </div>
                                                    </blockquote>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <blockquote>
                                                    <div class="form-group">
                                                      <label>Pauta nº 10:</label>
                                                      <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p10" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Resolução nº 10:</label>
                                                      <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r10" class="form-control col-md-7 col-xs-12"></textarea>
                                                    </div>
                                                    </blockquote>
                                                  </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <blockquote>
                                                      <div class="form-group">
                                                        <label>Pauta nº 11:</label>
                                                        <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p11" class="form-control col-md-7 col-xs-12">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Resolução nº 11:</label>
                                                        <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r11" class="form-control col-md-7 col-xs-12"></textarea>
                                                      </div>
                                                      </blockquote>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                      <blockquote>
                                                      <div class="form-group">
                                                        <label>Pauta nº 12:</label>
                                                        <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p12" class="form-control col-md-7 col-xs-12">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Resolução nº 12:</label>
                                                        <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r12" class="form-control col-md-7 col-xs-12"></textarea>
                                                      </div>
                                                      </blockquote>
                                                    </div>
                                                  </div>

                                              </div>


                                          </div>


                                          <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">


                                            <div class="x_content">

                                              <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <blockquote>
                                                    <div class="form-group">
                                                      <label>Pauta nº 13:</label>
                                                      <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p13" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Resolução nº 13:</label>
                                                      <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r13" class="form-control col-md-7 col-xs-12"></textarea>
                                                    </div>
                                                    </blockquote>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <blockquote>
                                                    <div class="form-group">
                                                      <label>Pauta nº 14:</label>
                                                      <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p14" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Resolução nº 14:</label>
                                                      <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r14" class="form-control col-md-7 col-xs-12"></textarea>
                                                    </div>
                                                    </blockquote>
                                                  </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <blockquote>
                                                      <div class="form-group">
                                                        <label>Pauta nº 15:</label>
                                                        <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p15" class="form-control col-md-7 col-xs-12">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Resolução nº 15:</label>
                                                        <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r15" class="form-control col-md-7 col-xs-12"></textarea>
                                                      </div>
                                                      </blockquote>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                      <blockquote>
                                                      <div class="form-group">
                                                        <label>Pauta nº 16:</label>
                                                        <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p16" class="form-control col-md-7 col-xs-12">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Resolução nº 16:</label>
                                                        <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r16" class="form-control col-md-7 col-xs-12"></textarea>
                                                      </div>
                                                      </blockquote>
                                                    </div>
                                                  </div>

                                              </div>


                                          </div>

                                          <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">


                                            <div class="x_content">

                                              <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <blockquote>
                                                    <div class="form-group">
                                                      <label>Pauta nº 17:</label>
                                                      <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p17" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Resolução nº 17:</label>
                                                      <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r17" class="form-control col-md-7 col-xs-12"></textarea>
                                                    </div>
                                                    </blockquote>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <blockquote>
                                                    <div class="form-group">
                                                      <label>Pauta nº 18:</label>
                                                      <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p18" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Resolução nº 18:</label>
                                                      <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r18" class="form-control col-md-7 col-xs-12"></textarea>
                                                    </div>
                                                    </blockquote>
                                                  </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <blockquote>
                                                      <div class="form-group">
                                                        <label>Pauta nº 19:</label>
                                                        <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p19" class="form-control col-md-7 col-xs-12">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Resolução nº 19:</label>
                                                        <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r19" class="form-control col-md-7 col-xs-12"></textarea>
                                                      </div>
                                                      </blockquote>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                      <blockquote>
                                                      <div class="form-group">
                                                        <label>Pauta nº 20:</label>
                                                        <input type="text" maxlenght="100" placeholder="Um assunto tratado em reunião." name="p20" class="form-control col-md-7 col-xs-12">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Resolução nº 20:</label>
                                                        <textarea rows=3 maxlenght="500" placeholder="Específico, Mensurável, Atingível, Relevante e Temporal" type="text" name="r20" class="form-control col-md-7 col-xs-12"></textarea>
                                                      </div>
                                                      </blockquote>
                                                    </div>
                                                  </div>

                                              </div>


                                          </div>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>




                            </div>



                            <div id="step-3">

                              <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">

                                  <blockquote>
                                    <h2 class="StepTitle">Finalização</h2>
                                    <p style="text-align:justify;">
                                      Atenção! A ata poderá ser recusada caso esteja muito rasa ou com informações obrigatórias ausentes.<br>
                                    </p>

                                    <div class="form-group">
                                      <label class="control-label">Observações Gerais:</label>
                                      <div>
                                        <textarea rows=4 type="text" name="observacoes" class="form-control" maxlength="255"></textarea>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                          <label class="control-label">Senha*:</label>
                                          <div>
                                            <input type="password" name="senha" class="form-control" required maxlength="25">
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                  </blockquote>

                              </div>
                              <div class="col-md-2"></div>
                            </div>





                          </div>
                        </form>
                          <!-- End SmartWizard Content -->



                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                  <!-- Modal de edição -->
                  <div class="modal fade bs-example-modal-lg" id="modal-editar" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Visualizar | Ata nº 000000</h4>
                        </div>
                        <div class="modal-body">



                          <div class="clearfix"></div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_content">
                                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                      <li role="presentation" class="active"><a href="#tab_content11" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Informações</a>
                                      </li>
                                      <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Pautas e Resoluções</a>
                                      </li>
                                      <li role="presentation" class=""><a href="#tab_content33" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Observações</a>
                                      </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">

                                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">

                                        <div class="x_content">

                                          <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                            <blockquote>
                                            <p><b>Título:</b> lorem ipsum alguma coisa.</p>
                                            <p><b>Mediador:</b> lorem ipsum alguma coisa.</p>
                                            <p><b>Autor:</b> lorem ipsum alguma coisa.</p>
                                            <p><b>Participantes:</b> lorem ipsum alguma coisa.</p>
                                            <p><b>Tipo:</b> lorem ipsum alguma coisa.</p>
                                            <p><b>Diretor:</b> lorem ipsum alguma coisa.</p>
                                            <p><b>Data:</b> lorem ipsum alguma coisa.</p>
                                            </blockquote>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                              <br><br>
                                              <img class="img-responsive" src="../../../../system/img/logo_cinza_high2.png">
                                              <p>Ata nº XXXXXX | Informação sensível, mantenha sigilo.</p>
                                            </div>
                                          </div>

                                        </div>

                                      </div>

                                      <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile-tab">


                                        <div class="x_content">

                                          <blockquote>
                                            <p><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                              posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</i></p>
                                            <footer>Pauta nº 01, <cite title="Source Title">nome da pauta</cite>
                                            </footer>
                                          </blockquote>


                                          <blockquote>
                                            <p><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                              posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</i></p>
                                            <footer>Pauta nº 02, <cite title="Source Title">nome da pauta</cite>
                                            </footer>
                                          </blockquote>

                                          <blockquote>
                                            <p><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                              posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</i></p>
                                            <footer>Pauta nº 03, <cite title="Source Title">nome da pauta</cite>
                                            </footer>
                                          </blockquote>

                                          <blockquote>
                                            <p><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                              posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</i></p>
                                            <footer>Pauta nº 04, <cite title="Source Title">nome da pauta</cite>
                                            </footer>
                                          </blockquote>


                                        </div>



                                      </div>

                                      <div role="tabpanel" class="tab-pane fade" id="tab_content33" aria-labelledby="profile-tab2">

                                        <div class="x_content">

                                          <blockquote>
                                            <p><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                              posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</i></p>
                                            <footer>Observação de: <cite title="Source Title">nome do autor</cite>
                                            </footer>
                                          </blockquote>

                                        </div>


                                      </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>



                        </div>

                      </div>
                    </div>
                  </div>

              </div>


          </div>
        </div>
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
