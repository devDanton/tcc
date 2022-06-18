<?php
session_start(); //inicia sessão(); - guarda login do ususário neste computador
include "cabecalho.php";
include_once "conexao.php";
$nome = "";
$data_nascimento = "";
$telefone = "";
$email = "";
$endereco = "";
$numero = "";
$bairro = "";
$status = false;
$id_atual = "";

if (isset($_POST["nome"], $_POST["data_nascimento"], $_POST["telefone"], $_POST["email"], $_POST["endereco"], $_POST["bairro"], $_POST["numero"])) {
  //filtrando inputs para remover caracteres que não correspondem ao padrão
  $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
  $data_nascimento = filter_input(INPUT_POST, "data_nascimento");
  $telefone = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING);
  $numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_NUMBER_INT);
  $bairro = filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_STRING);

  if (!$nome || !$data_nascimento || !$telefone || !$email || !$endereco || !$numero || !$bairro) {
    $mensagem = "Dados inválidos!";
  } else {
    /*statement*/
    $result_usuario = "INSERT INTO doador (nome, data_nascimento, telefone, email, endereco, numero, bairro) VALUES ('$nome', '$data_nascimento', '$telefone', '$email', '$endereco', '$numero', '$bairro')";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $conn->exec($result_usuario);
    $id_atual = $conn->lastInsertId();

    if (mysqli_insert_id($conexao)) {
      $_SESSION['msg'] = "<p style='color:green;'>Enviado com sucesso!</p>";
      header('Location: cadastro_doador2.php');
    } else {
      $_SESSION['msg'] = "<p style='color:red;'>Falha no envio</p>";
      header('Location: cadastro_doador.php');
    }

    $status = true;
  }
}
?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="index.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="index.php">Voltar</a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="container">
    <form method="POST">
      <h1>Cadastro de doador</h1>
      <label for="nome_completo">
        <span>Nome completo</span>
        <input placeholder="" id="nome_completo" name="nome" type="text" class="validate" required />
      </label>
      <label for="data_nascimento">
        <span>Data de nascimento</span>
        <input id="data_nascimento" name="data_nascimento" type="date" class="validate" required />
      </label>

      <label for="telefone">
        <span>Telefone</span>
        <input placeholder="" id="telefone" name="telefone" type="text" class="validate" required />
      </label>

      <label for="email">
        <span>E-mail</span>
        <input placeholder="" id="email" type="email" name="email" class="validate" required />
      </label>

      <label for="endereco">
        <span>Endereço</span>
        <input placeholder="" id="endereco" type="text" name="endereco" class="validate" required />
      </label>

      <label for="numero">
        <span>Número</span>
        <input placeholder="" id="numero" type="number" name="numero" class="validate" required />
      </label>

      <label for="bairro">
        <span>Bairro</span>
        <input id="bairro" type="text" name="bairro" class="validate" required />
      </label>

      <button class="btn-enviar" type="submit">
        <a id="enviar">Enviar</a>
      </button>
      <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg']; //imprime mensagem de sucesso ou erro
        unset($_SESSION['msg']); //destroi variavel
      }
      ?>
    </form>
  </main>
</body>

</html>