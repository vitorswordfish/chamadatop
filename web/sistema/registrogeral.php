
<!DOCTYPE HTML>
<html lang="pt-br">

<head>

    <!-- CAPA DO SITE -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eyecom</title>
    <link rel="icon" href="../system/img/favicon.png">

    <!-- JS -->
    <script src="../system/js/jquery-3.3.1.min.js"></script>
    <script src="../system/bts/bootstrap.min.js"></script>


    <!-- Bootstrap 4 e FontAwesome -->
    <link rel="stylesheet" href="../system/bts/bootstrap.css">
    <link rel="stylesheet" href="../system/fts/css/font-awesome.min.css">
    <!-- Estilos Css Globais -->
    <link rel="stylesheet" href="../system/css/login.css">
    <link rel="stylesheet" href="../system/css/fonts.css">


</head>

<body>

<body background="images/plano3.jpg" >


  <section class="container">

    <div class="row">

    <div class="col-md-3"></div>

    <div class="col-md-6">
    <section class="corpo_principal">

    <div class="corpo_secundario">

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <img src="images/unb.png" class="logo img-fluid">
      </div>
      <div class="col-md-4"></div>
    </div>

    <div class="row">


      <div class="col-md-12">

        
          
          <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link" id="nav-aluno-tab" data-toggle="tab" href="#nav-aluno" role="tab" aria-controls="nav-aluno" aria-selected="false">Aluno</a>
    <a class="nav-item nav-link" id="nav-prof-tab" data-toggle="tab" href="#nav-prof" role="tab" aria-controls="nav-prof" aria-selected="false">Professor</a>
  </div>
</nav>

</div>
          
          <p class="textocapa">"É muito melhor arriscar coisas grandiosas, alcançar triunfos e glórias, mesmo expondo-se a derrota, do que formar fila com os pobres de espírito que nem gozam muito nem sofrem muito, porque vivem nessa penumbra cinzenta que não conhece vitória nem derrota." -<i> Theodore Roosevelt</i></p>
          
  </div>


<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade" id="nav-aluno" role="tabpanel" aria-labelledby="nav-aluno-tab"><div class="col-md-12">

<form action="../system/controllers/registraraluno.php" method="POST">
    
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" placeholder="Ex: Marcos Augusto" name="nome">
     </div>

    <div class="form-group">
    <label for="matricula">Matrícula</label>
    <input type="text" class="form-control" id="reg" maxlength="9" pattern="[0-9]{2}[0-9]{7}" placeholder="123456789" name = "reg" required oninvalid="setCustomValidity('Por favor, preencha com uma matrícula válida')" onchange="try{setCustomValidity('')}catch(e){}" / title="Preencha aqui com uma matrícula de 9 dígitos">
    </div>

   <div class="form-group">
    <label>Curso</label>
<select class="form-control" name = "curso">
<option>Administração</option>
<option>Administração Pública</option>
<option>Agronomia</option>
<option>Arquitetura e Urbanismo</option>
<option>Arquivologia</option>
<option>Artes Cênicas</option>
<option>Artes Plásticas</option>
<option>Artes Visuais</option>
<option>Biblioteconomia</option>   
<option>Biotecnologia</option>
<option>Ciência da Computação </option>
<option>Ciência Política</option>
<option>Ciências Ambientais</option>
<option>Ciências Biológicas</option>
<option>Ciências Contábeis</option>
<option>Ciências Econômicas</option>
<option>Ciências Farmacêuticas</option>
<option>Ciências Naturais</option>
<option>Ciências Sociais</option>
<option>Computação</option>
<option>Comunicação Organizacional</option>
<option>Comunicação Social </option>
<option>Design</option>
<option>Direito </option>
<option>Educação Física </option>
<option>Educação do Campo</option>
<option>Enfermagem e Obstetrícia</option>
<option>Engenharia Aeroespacial</option>
<option>Engenharia Ambiental </option>
<option>Engenharia Automotiva</option>
<option>Engenharia Civil</option>
<option>Engenharia de Computação</option>
<option>Engenharia de Energia</option>
<option>Engenharia de Redes de Comunicação</option>
<option>Engenharia de Produção</option>
<option>Engenharia de Software</option>
<option>Engenharia Elétrica</option>
<option>Engenharia Eletrônica</option>
<option>Engenharia Florestal</option>
<option>Engenharia Mecânica</option>
<option>Engenharia Mecatrônica</option>
<option>Estatística</option>
<option>Farmácia</option>
<option>Filosofia</option>
<option>Física</option>
<option>Fisioterapia</option>
<option>Fonoaudiologia</option>
<option>Geofísica</option>
<option>Geografia</option>
<option>Geologia</option>
<option>Gestão Ambiental</option>
<option>Gestão de Políticas Públicas</option>
<option>Gestão de Agronegócio</option>
<option>Gestão em Saúde Coletiva</option>
<option>História</option>
<option>Letras</option>
<option>Letras-Tradução</option>
<option>Línguas EStrangeiras Aplicadas - MSI</option>
<option>Matemática</option>
<option>Medicina</option>
<option>Medicina Veterinária</option>
<option>Museologia</option>
<option>Música</option>
<option>Nutrição</option>
<option>Odontologia</option>
<option>Pedagogia</option>
<option>Psicologia</option>
<option>Química</option>
<option>Química Tecnológica</option>
<option>Relações Internacionais</option>
<option>Saúde Coletiva</option>
<option>Serviço Social</option>
<option>Teoria Crítica e História da Arte</option>
<option>Terapia Ocupacional</option>
<option>Turismo</option>
</select>
    </div>


    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" placeholder="*********" name="senha" required maxlength="16">
    </div>



    <p class="textorodape">EyeCom - Automatization & Security </p>

    <div class="row">
      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </div>

</form>

</div></div>

  <div class="tab-pane fade" id="nav-prof" role="tabpanel" aria-labelledby="nav-prof-tab"><div class="col-md-12">

<form action="../system/controllers/registrarprof.php" method="POST">
    
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" placeholder="Ex: Marcos Augusto" name="nome">
     </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email"  required oninvalid="setCustomValidity('Por favor, preencha com um e-mail válido')" onchange="try{setCustomValidity('')}catch(e){}" / title="Preencha aqui com seu e-mail"/>
    </div>

<div class="form-group">
<label for="exampleFormControlSelect1">Departamento</label>
<select class="form-control" id="exampleFormDepartamento">
<option>Centro de Apoio ao Desenvolvimento Tecnológico</option>
<option>Centro de Desenvolvimento Sustentável</option>
<option>Centro de Estudos Avançados e Multidisciplinares</option>
  <option>Centro de Excelência em Turismo</option>
  <option>Decanato de Ensino de Graduação</option>
  <option>Decanato de Extensão</option>
  <option>Departamento de Administração</option>
  <option>Departamento de Antropologia</option>
  <option>Departamento de Artes Cênicas</option>
<option>Departamento de Artes Visuais</option>
  <option>Departamento de Audiovisuais e Publicidade</option>
  <option>Departamento de Biologia Celular</option>
  <option>Departamento de Botânica</option>
  <option>Departamento de Ciência da Computação</option>
  <option>Departamento de Ciências Fisiológicas</option>
  <option>Departamento de Comunicação Organizacional</option>
  <option>Departamento de Desenho Industrial</option>
  <option>Departamento de Ecologia</option>
  <option>Departamento de Economia</option>
  <option>Departamento de Enfermagem</option>
  <option>Departamento de Engenharia Civil e Ambiental</option>
  <option>Departamento de Engenharia de Produção</option>
  <option>Departamento de Engenharia Elétrica</option>
  <option>Departamento de Engenharia Florestal</option>
  <option>Departamento de Engenharia Mecânica</option>
  <option>Departamento de Estatística</option>
  <option>Departamento de Estudos Latino-Americanos</option>
  <option>DEPARTAMENTO DE FARMÁCIA</option>
  <option>Departamento de Filosofia</option>
  <option>Departamento de Fitopatologia</option>
  <option>Departamento de Genética e Morfologia</option>
  <option>Departamento de Geografia</option>
  <option>Departamento de Gestão de Políticas Públicas - GPP</option>
  <option>Departamento de História</option>
  <option>Departamento de Jornalismo</option>
  <option>Departamento de Línguas Estrangeiras e Tradução</option>
  <option>Departamento de Linguística, Português, Líng Clás</option>
  <option>Departamento de Matemática</option>
  <option>Departamento de Métodos e Técnicas</option>
  <option>Departamento de Música</option>
  <option>Departamento de Nutrição</option>
  <option>Departamento de Odontologia</option>
  <option>Departamento de Planejamento e Administração</option>
  <option>Departamento de Processos Psicologicos Básicos</option>
  <option>Departamento de Projetos Expressão e Representação</option>
  <option>Departamento de Psic.Escolar e do Desenvolvimento</option>
<option>Departamento de Psicologia Clínica</option>
  <option>Departamento de Psicologia Social e do Trabalho</option>
  <option>Departamento de Saúde Coletiva</option>
  <option>Departamento de Serviço Social</option>
  <option>Departamento de Sociologia</option>
  <option>Departamento de Tecnologia em Arquit. e Urbanismo</option>
  <option>Departamento de Teoria e Fundamentos</option>
  <option>Departamento de Teoria Literária e Literatura</option>
  <option>Departamento de Zoologia</option>
  <option>Depto de Ciências Contábeis e Atuariais</option>
<option>Depto.de Teoria e Hist.em Arquitetura e Urbanismo</option>
  <option>Direção do Instituto Ciências Biológicas</option>
  <option>Direção do Instituto de Psicologia</option>
<option>Faculd. de Economia, Administração e Contabilidade</option>
  <option>Faculdade de Agronomia e Medicina Veterinária</option>
  <option>Faculdade de Ciência da Informação</option>
  <option>Faculdade de Ciências da Saúde</option>
  <option>Faculdade de Direito</option>
  <option>Faculdade de Educação</option>
  <option>Faculdade de Educação Física</option>
  <option>Faculdade de Medicina</option>
  <option>Faculdade de Tecnologia</option>
  <option>Instituto de Artes</option>
<option>Instituto de Ciência Política</option>
  <option>Instituto de Ciências Biológicas</option>
  <option>Instituto de Ciências Humanas</option>
  <option>Instituto de Física</option>
  <option>Instituto de Geociências</option>
  <option>Instituto de Letras</option>
  <option>Instituto de Química</option>
<option>Instituto de Relações Internacionais</option>
</select>
</div>

    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" placeholder="*********" name="senha" required maxlength="16">
    </div>



    <p class="textorodape">EyeCom - Automatization & Security </p>

    <div class="row">
      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </div>

</form>

</div></div>

    </div>



    </section></div>

    <div class="col-md-3"></div>

  </div>

  </section>



</body>

</html>
