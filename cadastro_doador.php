<?php include "cabecalho.php";
include "conexao.php";
$mensagem = "Preencha todos os campos!";
$nome = "";
$data_nascimento = "";
$telefone = "";
$email = "";
$endereco = "";
$numero = "";
$bairro = "";
$status = false;

if (isset($_POST["nome"], $_POST["data_nascimento"], $_POST["telefone"], $_POST["email"], $_POST["endereco"], $_POST["bairro"], $_POST["numero"])) {
  //$conexao = new PDO("mysql:host=localhost;dbname=tcc", "root", ""); //Substitui pelo include da página conexão
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
    $stm = $conexao->prepare('INSERT INTO doador (nome, data_nascimento, telefone, email, endereco, numero, bairro) VALUES (:nome, :data_nascimento, :telefone, :email, :endereco, :numero, :bairro)');
    $stm->bindParam('nome', $nome);
    $stm->bindParam('data_nascimento', $data_nascimento);
    $stm->bindParam('telefone', $telefone);
    $stm->bindParam('email', $email);
    $stm->bindParam('endereco', $endereco);
    $stm->bindParam('numero', $numero);
    $stm->bindParam('bairro', $bairro);
    $stm->execute();

    $status = true;
    $mensagem = "Enviado com sucesso!";
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

    </form>
    <?php
    if ($status == true) {
      header('Location: cadastro_doador2.php');
    }
    ?>
  </main>
</body>

</html>