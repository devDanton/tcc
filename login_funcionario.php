<?php
include "cabecalho.php";
include_once "conexao.php";
$usuario_db = "";
$senha_db = "";



?>

<body>
  <main class="container-login">
    <form class="form-login">
      <div class="div-login">
        <h1 id="h1-login">Login funcionário</h1>
        <label for="usuario">
          <span>Usuário</span>
          <input name="usuario" placeholder="" id="user" type="text" class="validate" />
        </label>

        <label for="senha">
          <span>Senha</span>
          <input name="senha" placeholder="" id="senha_login" type="password" class="validate" />
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
          <a class="btn-entrar" href="tela_inicial.html">
            <span>Entrar</span>
          </a>
        </div>

        <div>
          <a id="esqueceu_senha" href="">Esqueceu sua senha?</a>
        </div>
        <p>
          Não tem uma conta?
          <a id="criar_conta" href="">Criar uma conta</a>
        </p>
      </div>
    </form>
  </main>
</body>

</html>