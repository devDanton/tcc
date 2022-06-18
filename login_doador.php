<!--<?php include "cabecalho.php" ?>-->
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
  <main class="container-login">
    <form class="form-login">
      <div class="div-login">
        <h1 id="h1-login">Login doador</h1>
        <label for="usuario">
          <span>Usuário</span>
          <input placeholder="" id="user" type="text" class="validate" />
        </label>

        <label for="senha">
          <span>Senha</span>
          <input placeholder="" id="senha_login" type="password" class="validate" />
        </label>
        <label class="label_facebook" for="">
          <a class="facebook" href="#">
            <img src="icons/facebook.svg" alt="Facebook" />
            <p id="span1">Entre com o Facebook</p>
          </a>
        </label>

        <label class="label_google" for="">
          <a class="google" href="#">
            <img src="icons/google.svg" alt="Google" />
            <p id="span2">Entre com o Google</p>
          </a>
        </label>
        <div class="entrar">
          <a href="tela_inicial.html">
            <input class="btn-entrar" type="submit" value="Entrar" />
          </a>
        </div>

        <div>
          <a id="esqueceu_senha" href="">Esqueceu sua senha?</a>
        </div>

        <p id="criar_conta1">
          Não tem uma conta?
          <a id="criar_conta2" href="">Criar uma conta</a>
        </p>
      </div>
    </form>
  </main>
</body>

</html>