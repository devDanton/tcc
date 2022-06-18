<?php
session_start();
include "cabecalho.php";
include_once "conexao.php";

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

echo $nome;
echo $data_nascimento;
echo $telefone;
echo $email;
echo $endereco;
echo $numero;
echo $bairro;
echo "<br>";
echo $camisa;
echo $calca;
echo $sapato;
echo $meia;
echo $cueca;


if (isset($_POST["senha"], $_POST["senha_repetida"])) {
  $senha = filter_input(INPUT_POST, "senha");
  $senha_repetida = filter_input(INPUT_POST, "senha_repetida");

  // if ($_POST["senha"] == $_POST["senha_repetida"]) {
  if (!$senha || !$senha_repetida) {
    $mensagem = "Dados inválidos!";
  } else {
    $criptografada = md5($senha);

    $result_usuario = "INSERT INTO doador (nome, data_nascimento, telefone, email, endereco, numero, senha, bairro, tamanho_camisa, tamanho_calca, tamanho_sapato, tamanho_meia, tamanho_cueca) VALUES ('$nome', '$data_nascimento', '$telefone', '$email', '$endereco', '$numero', '$senha', '$bairro', '$camisa','$calca','$sapato','$meia', '$cueca')";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
  }

  if (mysqli_insert_id($conexao)) {
    $_SESSION['msg'] = "<p style='color:green;'>Enviado com sucesso!</p>";
    header('Location: login_doador.php');
  } else {
    $_SESSION['msg'] = "<p style='color:red;'>Falha no envio</p>";
    header('Location: cadastro_doador3.php');
  }
}
//} else {
//  echo "<p style='color:red;'>As senhas não são iguais</p>";
//}
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
      <label for="senha">
        <span>Senha</span>
        <input name="senha" placeholder="" id="senha" type="password" class="validate" />
      </label>
      <label for="senha_repitida">
        <span>Repita a senha</span>
        <input name="senha_repetida" placeholder="" id="senha_repitida" type="password" class="validate" />
      </label>
      <a class="btn-enviar" href="login_funcionario.html">
        <span id="enviar">Enviar</span>
      </a>
    </form>
    </div>
    </div>
  </main>
</body>

</html>