<!DOCTYPE HTML>
<html lang="pt-br">

<head>

    <!-- CAPA DO SITE -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SARC</title>
    <link rel="icon" href="system/img/favicon.png">

    <!-- JS -->
    <script src="system/js/jquery-3.3.1.min.js"></script>
    <script src="system/bts/bootstrap.min.js"></script>


    <!-- Bootstrap 4 e FontAwesome -->
    <link rel="stylesheet" href="system/bts/bootstrap.css">
    <link rel="stylesheet" href="system/fts/css/font-awesome.min.css">
    <!-- Estilos Css Globais -->
    <link rel="stylesheet" href="system/css/login.css">
    <link rel="stylesheet" href="system/css/fonts.css">


</head>

<body>

  <!-- Video de fundo -->
  <video autoplay muted loop id="myVideo">
      <source src="system/videos/video.mp4" type="video/mp4">
  </video>


  <section class="container">

    <div class="row">

    <div class="col-md-3"></div>

    <div class="col-md-6">
    <section class="corpo_principal">

    <div class="corpo_secundario">

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <img src="system/img/unb.png" class="logo img-fluid">
      </div>
      <div class="col-md-4"></div>
    </div>

    <div class="row">


      <div class="col-md-12">

        <form action="system/controllers/logar.php" method="POST">

            <p class="textocapa">"É muito melhor arriscar coisas grandiosas, alcançar triunfos e glórias, mesmo expondo-se a derrota, do que formar fila com os pobres de espírito que nem gozam muito nem sofrem muito, porque vivem nessa penumbra cinzenta que não conhece vitória nem derrota." -<i> Theodore Roosevelt</i></p>

            <div class="form-group">
                <label for="matricula">Matricula:</label>
                <input type="matricula" class="form-control" placeholder="Ex:170100XX1" name="matricula" required maxlength="9">
             </div>


            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" placeholder="*********" name="senha" required maxlength="16">
            </div>

            <div class="row">

            <div class="col-md-9 col-sm-9 col-xs-9">
              <div class="form-group">
                <label for="materia">Disciplina:</label>
                <select class="form-control">
                  <option>Proj Transversal 1</option>
                  <option>Proj Transversal 2</option>
                  <option>Lab Arquitetura e Protocolos de Redes</option>
                </select>
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                  <div class="form-group">
                    <label for="materia">Turma</label>
                    <select class="form-control">
                      <option>A</option>
                      <option>B</option>
                      <option>C</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-1"></div>
              </div>
            </div>

            </div>


            <p class="textorodape">SARC - Sistema Automatizado de Realização da Chamada<br>
            Projeto Transversal de Redes 1</p>

            <div class="row">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Marcar presença!</button>
              </div>
            </div>

        </form>

      </div>


    </div>

    </div>



    </section></div>

    <div class="col-md-3"></div>

  </div>

  </section>



</body>

</html>
