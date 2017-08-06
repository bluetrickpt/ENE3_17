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
        <h1>Voluntários</h1>

        <p>
            A organização está à procura de voluntários para ajudarem a fazer deste evento um acontecimento memorável.
            Se estiveres interessado em nos ajudar, inscreve-te no formulário abaixo e lê todas as descrições com muita atenção.
            Em caso de alguma dúvida, não hesites em nos <a href="contacts.php">contactar</a>.
        </p>

        <p>
            Como voluntário poderás ter funções variadas, desde acordar os participantes de manhã, entregar senhas para os pequenos-almoços, almoços e jantares, conduzir os participantes aos lugares onde devem estar, orientar os workshops, animar os participantes ou organizar as febradas, entre muitos outros.
        </p>

        <p>
            No dia antes do início do evento (dia 4 de setembro) haverá uma formação de cariz obrigatório, onde te será explicado tudo o que precisas de saber para o(s) posto(s) que irás ocupar no evento.
            Com a participação como voluntário terás asseguradas todas as refeições durante o teu trabalho, uma t-shirt de voluntário, um certificado de participação e a experiência de participar num evento nacional!
        </p>

        <p style="text-align: center">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSegL8BKXSZITiSH_DBiS8BG7kD07xRZ302MOYJq3UfwRNKDEA/viewform?embedded=true" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">A carregar...</iframe>
        </p>

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

