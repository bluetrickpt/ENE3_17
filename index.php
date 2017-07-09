<html>

<head>
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">

  <title>ENEEE Coimbra 2017</title>
  <link rel="icon" href="images/logo_32x32.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/index.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet"> 

</head>

<body>

  <noscript>
    <div class="noscriptmsg">
      <p>You don't have javascript enabled! This worksite will work poorly without javascript.</p>
    </div>
  </noscript>

  <?php include("analytics/analyticstracking.php"); ?>

  <div id="header"></div>
  <div class="section">
    <div class="container primary">

      <h1 style="text-align:center;margin-bottom: 45px;margin-top: 30px;">
        O Encontro Nacional de Estudantes de Engenharia Electrotécnica (ENE3) está de volta a Coimbra!
      </h1>

      <h3 style=""> Liberta o teu calendário para os dias <b>5, 6, 7 e 8 de Setembro</b> para o ENE3 e vem à belíssima cidade
        de Coimbra para a oitava edição do ENE3! </h3>

        <p style="text-align: center; margin: 35px">
            <iframe src="https://drive.google.com/file/d/0BxvRzbnAs-WwMExmUk0wcm9LY3c/preview" width="640" height="480"></iframe>
        </p>

        <p>Se ainda não te inscreveste, passa já na nossa página de <a href="register.php">inscrições</a> e seleciona o plano
        que melhor se ajusta às tuas preferências.
        </p>



        <!--<h3>Já conheces o nosso <b>Roadshow</b>?</h3>
        <p>
          Entre 23 e 26 de Maio iremos visitar universidades e institutos por todo o país, para divulgar o ENE3 2017.
          Consulta abaixo a imagem para datas e para saber se passamos na tua instituição. Se tiveres alguma dúvida não
          hesites em nos contactar (vê <a href="contacts.php">aqui</a> como).
        </p>




        <p style="text-align:center;">
          <img src="images/roadshow.png" alt="roadshow" width="50%" align="center" style="margin:20px"/>
        </p>
        <div class="clearfix"></div>

          <p>
              Estaremos em:</p>
          <p><b>Dia 23 de Maio:</b> Faculdade de Engenharia do Porto // Universidade de Aveiro</p>
          <p><b>Dia 24 de Maio:</b> Universidade de Coimbra // Instituto Politécnico de Coimbra</p>
          <p><b>Dia 25 de Maio:</b> Instituto Técnico de Lisboa // Instituto Politécnico de Leiria</p>
          <p><b>Dia 26 de Maio:</b> Universidade da Beira Interior // Universidade do Minho</p>

        <p>Vem falar connosco! Temos surpresas à tua espera.</p>-->

      <h3>Newsletter</h3>


      <!-- Newsletter Form -->
      <form style="border:1px solid #ccc;padding:3px;text-align:center;" action="https://tinyletter.com/ene3_2017"
            method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/ene3_2017', 'popupwindow',
            'scrollbars=yes,width=800,height=600');return true">

        <p>Desejas receber no teu mail as últimas novidades sobre o ENE3 2017? Inscreve-te já abaixo na nossa newsletter.
          Não te preocupes, o spam será contido a um mínimo essential.</p>
        <label for="tlemail">E-mail:</label>
        <input type="text" style="width:140px" name="email" id="tlemail"/>

        <input type="hidden" value="1" name="embed"/>
        <input type="submit" value="Submeter"/>
        <p>
          <a href="https://tinyletter.com" target="_blank">powered by TinyLetter</a>
        </p>
      </form>

      <!--<div id="my-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="carousel-caption">
              <h2 class="main-color titles">13 de Jan a 11 de Dez asdhakdfasd asdfasdfasdf</h2>
            </div>
          </div>
          <div class="item">
            <div class="carousel-caption">
              <h2 class="main-color titles" >ENEEE</h2>
            </div>
          </div>
          <div class="item">
            <div class="carousel-caption">
              <h2 class="main-color titles" >em Coimbra!</h2>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#my-slider" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
        <a class="right carousel-control" href="#my-slider" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
      </div>-->
    </div>
  </div>

  <?php include("cp/cp.php"); ?>
  <div id="footer"></div>


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
    $(function(){
      $("#header").load("header.html");
      $("#footer").load("footer.html");
    });
  </script>


</body>


</html>

