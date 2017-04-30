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
                <iframe src="https://www.google.pt/maps?f=q&amp;source=s_q&amp;hl=pt-PT&amp;geocode=&amp;q=Departamento+de+Engenharia+Electrot%C3%A9cnica+e+de+Computadores,+Coimbra&amp;aq=0&amp;oq=departamento+de+engenharia+electrote&amp;sll=39.639538,-7.849731&amp;sspn=15.112933,19.753418&amp;t=m&amp;ie=UTF8&amp;hq=Departamento+de+Engenharia+Electrot%C3%A9cnica+e+de+Computadores,&amp;hnear=Coimbra&amp;ll=40.196782,-8.416216&amp;spn=0.024803,0.014301&amp;output=embed" frameborder="0" style="border: 0; width:100%; " ></iframe>
            </div>
          </div>
        <div class = "clearfix"></div>
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