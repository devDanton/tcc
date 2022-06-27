<?php
if (!isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION['id'])) {
  die("<div class=mensagem>Você não tem permissão para acessar esta página, porque não está logado</div><buttom class= \"btn-enviar\" style ='margin:auto; margin-top:1.5%'</button> <a href=\"login_funcionario.php\">Entrar</a></button>");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />

  <title>MakeGood</title>
</head>

<body>

</body>

</html>
</header>