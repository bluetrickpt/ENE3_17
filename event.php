<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ENEEE Coimbra 2017</title>
  <link rel="icon" href="images/logo_32x32.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/event.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet"> 
</head>

<body>

  <?php include("analytics/analyticstracking.php"); ?>

  <noscript>
    <div class="noscriptmsg">
      <p>You don't have javascript enabled! This worksite will work poorly without javascript.</p>
    </div>
  </noscript>

  <div id="header"></div>
  <div class="container primary">
        <div class="row col-md-12">
          <h1 class="text-primary">ENE3</h1>
          <h3>O Evento</h3>
          <div class="col-md-5 item">
              <p class="text-justify">
                O Encontro Nacional de Estudantes de Engenharia Eletrotécnica
                (ENE3) é um evento anual organizado por e para estudantes da
                área, tendo como principal objetivo juntar num espaço alunos
                vindos de todo o país e proporcionando um vasto leque de
                atividades no âmbito da Engenharia Eletrotécnica.
              </p>

              <p class="text-justify">
                O evento conta já com sete edições, fundado em Coimbra, está
                de volta à cidade-mãe pela terceira vez. A realização do ENE3_8
                está prevista para 1 a 4 de Setembro de 2017.
              </p>

              <p class="text-justify">
                É um evento que junta alunos de todos os cursos de Engenharia
                Eletrotécnica do país. Além de ser o maior curso da Faculdade
                de Ciências e Tecnologia e de Computadores da Universidade de
                Coimbra, no que diz respeito ao número de alunos, contando em
                2016 com 630 alunos, Engenharia Eletrotécnica tem curso em
                imensas escolas em todo o país desde Braga a Faro, passando
                pelo Porto, Aveiro, Leiria, Lisboa, Covilhã, entre outros.
              </p>

              <p class="text-justify">
                Por ter um público alvo muito grande, é objetivo da Comissão
                Organizadora do ENE3-8 aumentar o público do evento para
                perto das duas centenas de participantes.
              </p>

          </div>
          <div class="col-md-6 col-md-offset-1 item pie">
            <div class="box">
              <img src="./images/coimbra.jpg"/>
            </div>
            
          </div>
        </div>

        <div class="row col-md-12">
          <h1 class="text-primary">Coimbra</h1>
          <h3>Acessibilidade</h3>

          <div class="map-box bottom-padding col-md-12" style="margin:35px">
            <p style="text-align:center;">
              <iframe src="https://www.google.pt/maps?f=q&amp;source=s_q&amp;hl=pt-PT&amp;geocode=&amp;q=Departamento+de+Engenharia+Electrot%C3%A9cnica+e+de+Computadores,+Coimbra&amp;aq=0&amp;oq=departamento+de+engenharia+electrote&amp;sll=39.639538,-7.849731&amp;sspn=15.112933,19.753418&amp;t=m&amp;ie=UTF8&amp;hq=Departamento+de+Engenharia+Electrot%C3%A9cnica+e+de+Computadores,&amp;hnear=Coimbra&amp;ll=40.196782,-8.416216&amp;spn=0.024803,0.014301&amp;output=embed" frameborder="0" style="border: 0; height:55%; width: 100% " ></iframe>
            </p>
          </div>

          <div class = "transport">
            <div class="col-md-5 col-md-offset-1 item">
              <i class="fa fa-train fa-5x" aria-hidden="true"></i>
              <p>De Lisboa:<br>
              Lisboa Oriente -  Coimbra-B: 1h 34 min
              <br>Do Porto<br>
              Porto Campanhã - Coimbra-B: 58 min
              </p>
            </div>
          </div>
          <div class = "transport">
            <div class="col-md-5 col-md-offset-1 item">
              <i class="fa fa-car fa-5x" aria-hidden="true"></i>
              <p>De Lisboa<br>
              195 Km / 1h 45min
              <br>Do Porto<br>
              130 Km / 1h 15min
              </p>
            </div>
          </div>
        </div>


    </div>

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
    <script>
    $(function() {
    $('.item').matchHeight();
    });
  </script>

</body>
</html>