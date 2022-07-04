<?php
include_once "cabecalho.php";
include_once "conexao.php";
include_once "protecao.php";

$nome = "";
$tamanho = "";
$msg = "";
$quantidade_entrada = null;
$quantidade_entrada = null;
if (!isset($_SESSION)) {
  session_start();
}
if (!empty($_GET['id'])) {
  $id = $_GET['id'];
  $sql_select_item  = "SELECT * FROM item WHERE id = $id";
  $result_sql_select_item = mysqli_query($conexao, $sql_select_item);
  if ($result_sql_select_item->num_rows > 0) {
    while ($result_item = mysqli_fetch_assoc($result_sql_select_item)) {
      $nome = $result_item['nome'];
      $tamanho = $result_item['tamanho'];
      $entrada = $result_item['entrada'];
      $saida = $result_item['saida'];
    }
  } else {
    header('Location: controle_estoque.php');
  }

  if (isset($_POST["quantidade-entrada"], $_POST["quantidade-saida"])) {
    $quantidade_entrada = filter_input(INPUT_POST, "quantidade-entrada", FILTER_SANITIZE_NUMBER_INT);
    $quantidade_saida = filter_input(INPUT_POST, "quantidade-saida", FILTER_SANITIZE_NUMBER_INT);
    if ($quantidade_entrada >= 0 || $quantidade_saida >= 0) {
      echo $quantidade_entrada;
      echo $quantidade_saida;

      $quantidade_entrada = $entrada + $quantidade_entrada;
      $quantidade_saida = $saida + $quantidade_saida;
      $sql_update_item = "UPDATE item SET entrada='$quantidade_entrada', saida='$quantidade_saida' WHERE id = '$id'";
      $result_sql_update_item = mysqli_query($conexao, $sql_update_item);
      $_SESSION['msg'] = "<p style='color:green;'>Enviado com sucesso!</p>";
      $msg = $_SESSION['msg'];
      header('Location: controle_estoque.php');
    }
  }
}
?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="tela_inicial.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="controle_estoque.php">Voltar</a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="container">
    <form action="" method="POST">
      <?php
      echo "<h1>Efetue entrada ou saida em " . $nome . ",  tamanho: " . $tamanho . "</h1>";
      echo "<h1>Disponibilidade = " . $entrada - $saida . "</h1>";
      ?>
      <div class="entrada-saida">
        <label class="label-select" for="">
          <span>Entrada</span>
          <?php
          echo "<input min='0' type='number' name='quantidade-entrada' id='quantidade-entrada' class='validate' value ='0' <input/>";
          ?>
        </label>

        <label for="">
          <span>Saída</span>
          <?php
          echo "<input min='0' type='number' name='quantidade-saida' id='quantidade-saida' class='validate' value ='0' <input/>";
          ?>
        </label>
      </div>
      <button class="btn-enviar" type="submit">
        <a id="enviar">Enviar</a>
      </button>
      <?php
      echo $msg;
      ?>
    </form>
  </main>

  </html>