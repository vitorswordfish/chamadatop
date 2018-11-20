<?php

  extract($_GET);

?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>

    <!-- CAPA DO SITE -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eyecom</title>
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

            <b><p class="textocapa" style="color:red;text-align: center;font-size: 20px!important;">
              <?php

                  if (isset($fb)){
                    switch($fb){
                      case 1:
                        echo 'A senha e/ou matricula estão incorretas';
                        break;
                      case 2:
                        echo 'Ocorreu um erro crítico no sistema';
                        break; 
                      case 3:
                        echo 'Não está no horário desta aula';
                        break;
                      case 4:
                        echo 'Localização desativada ou inválida';
                        break;
                      case 5:
                        echo 'Rede inválida';
                        break;
                      case 7:
                        echo 'Não foi possível rastrear sua localização, habilite-a no browser.';
                    }
                  }

               ?>
            </p></b>

            <div class="form-group">
                <label for="matricula">E-mail:</label>
                <input type="text" class="form-control" placeholder="Ex:professor@unb.br" name="email" required maxlength="25">
             </div>


            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" placeholder="*********" name="senha" required maxlength="16">
            </div>


            <p class="textorodape">SARC - Sistema Automatizado de Realização da Chamada<br>
            Projeto Transversal de Redes 1<br>
            <a href="index.php">Chamada | </a><a href="login.php">Login | </a><a href="sistema/cadastrar.php">Cadastrar</a></p>

            <div class="row">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success" id="botao-confirma" >Logar</button>
              </div>
            </div>

            <p id="coordenadas"></p>

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
