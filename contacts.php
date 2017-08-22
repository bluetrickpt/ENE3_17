<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ENEEE Coimbra 2017</title>
  <link rel="icon" href="images/logo_32x32.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/contacts.css" rel="stylesheet" type="text/css">
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
          <div class="col-md-4 item contactcol">
          <h1 class="text-primary">Contactos</h1>
          <div class="info">
            <p>E-mail: <a href="mailto:ene3.2017@gmail.com"target="_top"> ene3.2017@gmail.com  <i class="fa fa-envelope" aria-hidden="true"></i></a><br><br>
              <i class="fa fa-phone" aria-hidden="true"></i> Telefone: 239796380<br><br>
              <i class="fa fa-map-marker" aria-hidden="true"></i> Morada:
              <br> <a target="_blank" href="http://www.uc.pt/fctuc/deec">Departamento de Engenharia Electrotécnica e de Computadores - FCTUC</a>
              <br>FCTUC,  Universidade de Coimbra - Pólo II
              <br>Coimbra 3030-290
              <br>Portugal </p>
              </div>
          </div>
          <div class="col-md-7 item contactcol map">
            <div class="map-box bottom-padding">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6095.891499791033!2d-8.419604301317966!3d40.18802074700759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22f99534710f55%3A0x6f9fbebbec1bd8ea!2sDepartamento+de+Engenharia+Electrot%C3%A9cnica+e+de+Computadores!5e0!3m2!1spt-PT!2spt!4v1503399953970"" frameborder="0" style="border: 0; width:100%; " ></iframe>
            </div>
          </div>
        <div class = "clearfix"></div>
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