<?php
include "cabecalho.php";
include_once "conexao.php";
$usuario = "";
$senha = "";
$mensagem = "";
if (isset($_POST["usuario"], $_POST["senha"])) {
  $usuario = $conexao->real_escape_string($_POST['usuario']);
  $senha = $conexao->real_escape_string($_POST['senha']);

  if (!$usuario || !$senha) {
    $mensagem = "<p style='margin:auto; color:#c93a3a'>Preencha todos os campos!<p>";
  } else {
    $criptografada = md5($senha);
    $sql_code =  "SELECT * FROM funcionario WHERE usuario = '$usuario' AND senha = '$criptografada'";
    $sql_query = $conexao->query($sql_code) or die("falha na execução do codigo sql: " . $conexao->error);

    $numero_linhas = $sql_query->num_rows;

    if ($numero_linhas == 1) {
      $usuario = $sql_query->fetch_assoc(); //salva dados da consulta do usuario em um array

      if (!isset($_SESSION)) {
        session_start();
      }
      $_SESSION['id'] = $usuario['id']; //salva dados do usuario do banco na sessão
      $_SESSION['nome'] = $usuario['nome'];
      $_SESSION['usuario'] = $usuario['usuario'];

      header('Location: tela_inicial.php');

      $mensagem = "<p style='margin:auto; color:green'>Usuario e senha corretos<p>";
    } else {
      $mensagem =  "<p style='margin:auto; color:#c93a3a; display: flex; align-items'>Falha no login! Usuário ou senha incorretos<p>";
    }
  }
}

?>

<body>
  <main class="container-login">
    <form action="" method="POST" class="form-login">
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
        <!-- <label class="label_facebook" for="">
          <a class="facebook" href="#">
            <img src="icons/facebook.svg" alt="Facebook" />
            <p id="span1">Entre com o Facebook</p>
          </a>
        </label> -->

        <!-- <label class="label_google" for="">
          <a class="google" href="#">
            <img src="icons/google.svg" alt="Google" />
            <p id="span2">Entre com o Google</p>
          </a>
        </label> -->
        <div class="entrar">
          <button class="btn-entrar" href="#">
            <a style="color:#23232e; margin:auto">Entrar</a>
          </button>
        </div>
        <?php
        echo $mensagem;
        ?>
        <div>
          <a id="esqueceu_senha" href="#">Esqueceu sua senha?</a>
        </div>
        <p>
          Não tem uma conta?
          <a id="criar_conta" href="cadastro_funcionario.php">Criar uma conta</a>
        </p>
      </div>
    </form>
  </main>
</body>

</html>