<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ENEEE Coimbra 2017</title>
    <link rel="icon" href="images/logo_32x32.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/program.css">
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
    <h1 class="text-primary">Candidaturas</h1>

    <p style="margin-top: 20px">
        Com o término deste fantástico evento, inicia-se também o processo de transição da equipa de organização para o ENE3 2018.
    Esta é a vossa oportunidade de continuarem a elevar a qualidade deste encontro anual.
    </p>

    <p style="margin-top: 20px">
        Se estás interessado em organizar o próximo ENE3, lê cuidadosamente o regulamento abaixo e envia-nos a tua candidatura
        para o mail <a href="mailto:candidaturas.ene3@gmail.com?Subject=Candidatura%20ENE3%202018">candidaturas.ene3@gmail.com</a>
    </p>

    <p class="text-center" style="margin: 70px">
        <b><a href="docs/regulamento.pdf">Regulamento</a></b>
    </p>


</div>



<div id="footer"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<script>
    $(function(){
        $("#header").load("header.html");
        $("#footer").load("footer.html");
    });
</script>

</body>
</html>
