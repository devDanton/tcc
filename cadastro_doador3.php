<?php
session_start();
include "cabecalho.php";
include_once "conexao.php";
$senha = "";
$senha_repetida = "";
$usuario = "";
$_SESSION['mensagem'] = "<span>Digite os dados solicitados</span>";


$nome = $_SESSION['nome'];
$data_nascimento = $_SESSION['data_nascimento'];
$telefone = $_SESSION['telefone'];
$email = $_SESSION['email'];
$endereco = $_SESSION['endereco'];
$numero = $_SESSION['numero'];
$bairro = $_SESSION['bairro'];

$camisa = $_SESSION['camisa'];
$calca = $_SESSION['calca'];
$sapato = $_SESSION['sapato'];
$meia = $_SESSION['meia'];
$cueca  = $_SESSION['cueca'];

//print_r($_SESSION); Imprime dados salvos da sessão


if (isset($_POST["usuario"], $_POST["senha"], $_POST["senha_repetida"])) {
  $usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_STRING);
  $senha = filter_input(INPUT_POST, "senha");
  $senha_repetida = filter_input(INPUT_POST, "senha_repetida");
  //echo $_POST["senha"];
  //echo $_POST["senha_repetida"];
  //echo $_POST["usuario"];

  if ($senha == $senha_repetida) {
    $criptografada = md5($senha);
    $result_usuario = "INSERT INTO doador (nome, data_nascimento, telefone, email, endereco, numero, usuario, senha, bairro, tamanho_camisa, tamanho_calca, tamanho_sapato, tamanho_meia, tamanho_cueca) VALUES ('$nome', '$data_nascimento', '$telefone', '$email', '$endereco', '$numero', '$usuario', '$criptografada', '$bairro', '$camisa','$calca','$sapato','$meia', '$cueca')";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);

    if (mysqli_insert_id($conexao)) {
      //$_SESSION['msg'] = "<p style='color:green;'>Enviado com sucesso!</p>";
      header('Location: login_doador.php');
    } else {
      $_SESSION['msg'] = "<span style='color:red;'>Falha no envio</span>";
      header('Location: cadastro_doador3.php');
    }
  } else {
    $_SESSION['mensagem'] = "<span style='color:red;'>As senhas não correspondem</span>";
    //echo $_SESSION['mensagem'];
  }
}
?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="index.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="cadastro_doador.php">Voltar</a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="container">
    <form method="POST">
      <h1>Segurança</h1>
      <label for="usuario">
        <span>Nome de usuário</span>
        <input name="usuario" placeholder="" id="usuario" type="text" class="validate" required />
      </label>
      <label for="senha">
        <span>Senha</span>
        <input name="senha" placeholder="" id="senha" type="password" class="validate" required />
      </label>
      <label for="senha_repitida">
        <span>Repita a senha</span>
        <input name="senha_repetida" placeholder="" id="senha_repitida" type="password" class="validate" required />
      </label>
      <button class="btn-enviar" type="submit">
        <a id="enviar">Enviar</a>
      </button>
    </form>
    <?php
    print_r($_SESSION['mensagem']);
    unset($_SESSION['mensagem']);
    ?>
  </main>
</body>

</html>