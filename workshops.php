<html>

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>ENEEE Coimbra 2017</title>
  <link rel="icon" href="images/logo_32x32.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/register.css" rel="stylesheet" type="text/css">
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

    <div class="row">
      <div class="col-md-12 item">
        <h1 class="text-primary">Inscrições em workshops</h1>

<!--        <p>Por anunciar! Fica atento às nossas redes sociais. Se tiveres alguma dúvida não-->
<!--        hesites em nos contactar (vê <a href="contacts.php">aqui</a> como).</p>-->

          <p>Prepara-te para as inscrições nos workshops! Começam segunda-feira, dia 21 de agosto, pelas 17h, e terminam terça-feira, dia 22, pelas 23h59.
          </p>
		  <p>Preenche o formulário em baixo, de acordo com as instruções que estão disponíveis nele.
		  </p>
        <iframe src="https://goo.gl/forms/T7GKLjbioxOOn42A3" width=100% height=100% frameborder="0" marginheight="0" marginwidth="0">A carregar...</iframe>

      </div>
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
    <script>
    $(function() {
    $('.item').matchHeight();
    });
  </script>

</body>
</html>