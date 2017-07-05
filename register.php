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
        <h1 class="text-primary">Bilhetes</h1>

<!--        <p>Por anunciar! Fica atento às nossas redes sociais. Se tiveres alguma dúvida não-->
<!--        hesites em nos contactar (vê <a href="contacts.php">aqui</a> como).</p>-->

        <p>Vê e escolhe qual dos planos que temos disponíveis para ti. Assim que souberes o plano que preferes,
        preenche abaixo a tua inscrição.
        </p>

          <table class="col-md-12" style="margin-bottom: 15px">
              <tr>
                  <th class="col-md-3"><h3>Sem estadia</h3></th>
                  <th class="col-md-3"><h3>Normal</h3></th>
                  <th class="col-md-3"><h3>Alojamento</h3></th>
                  <th class="col-md-3"><h3>Grupos</h3></th>
              </tr>
              <tr>
                  <td>Este pacote inclui todas as despesas do evento, nomeadamente alimentação, exceto as despesas relacionadas
                      com dormida. Ideal para quem é de Coimbra ou para quem tem alojamento nesta cidade.</td>
                  <td>Este pacote inclui todas as despesas do evento e dormida em colchão em pavilhão.
                      Ideal para quem prefere um ambiente de maior convívio.</td>
                  <td>Este pacote inclui todas as despesas do evento e dormida em cama que poderá ser em pousada ou residência.
                      Ideal para quem prefere um ambiente mais calmo e confortável.</td>
                  <td>Este pacote inclui todas as vantagens do pacote Normal sendo adquirido, em simultâneo, por 5 pessoas.</td>
              </tr>
              <tr>
                  <td><b>Preço:</b> 35€</td>
                  <td><b>Preço:</b> 40€</td>
                  <td><b>Preço:</b> 60€</td>
                  <td><b>Preço:</b> 30€</td>
              </tr>
          </table>

          <p>Se estás a pensar vir de comboio, podes consultar <a href="event.php#discounts">aqui</a> os descontos promocionais que arranjámos para ti.</p>

        <!--<div id="payment_plans">
          <div class="col-md-3" id="payment-plan">
             <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
              class="img-responsive">
              <h3>Sem estadia</h3>
              <p>Este pacote inclui todas as despesas do evento, nomeadamente alimentação, exceto as despesas relacionadas
                  com dormida. Ideal para quem é de Coimbra ou para quem tem alojamento nesta cidade.</p>
            </div>
            <div class="col-md-3" id="payment-plan">

                <h3>Normal</h3>
                <p>Este pacote inclui todas as despesas do evento e dormida em colchão em pavilhão.
                    Ideal para quem prefere um ambiente de maior convívio.</p>
            </div>
            <div class="col-md-3" id="payment-plan">

              <h3>Alojamento</h3>
              <p>Este pacote inclui todas as despesas do evento e dormida em cama que poderá ser em pousada ou residência.
                  Ideal para quem prefere um ambiente mais calmo e confortável.</p>
            </div>
            <div class="col-md-3" id="payment-plan">

              <h3>Grupos</h3>
              <p>Este pacote inclui todas as vantagens do pacote Normal sendo adquirido, em simultâneo, por 5 pessoas.</p>
            </div>
          </div>-->



        </div>

      </div>
   

    <div class="row">
      <div class="col-md-12 item">
        <h1 class="text-primary">Inscrições</h1>

<!--        <p>As inscrições abrirão assim que anunciarmos os diferentes bilhetes disponíveis.</p>-->

        <p> Preenche o formulário abaixo para te inscreveres no ENEEE Coimbra 2017. Se precisares de ajuda,
            contacta-nos para pelo mail <a href="mailto:ene3.2017@gmail.com">ene3.2017@gmail.com</a> ou no <a href="">facebook</a>.</p>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScPJIdrniVkXJOwv_vQWB4uhQTKiieVqC0SSJmP9Y7sJIIU5w/viewform?embedded=true" width=100% height=100% frameborder="0" marginheight="0" marginwidth="0">A carregar...</iframe>

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