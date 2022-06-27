<?php
include_once "cabecalho.php";
include_once "conexao.php";
include_once "protecao.php";


$script_sql = "Select MAX(id) FROM campanha";
$sql = mysqli_query($conexao, $script_sql);
$ultima_insercao = mysqli_fetch_array($sql);
$script_sql = "SELECT * FROM campanha WHERE id = '$ultima_insercao[0]'";
$sql = mysqli_query($conexao, $script_sql);
//print_r($sql);
?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="tela_inicial.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="criar_campanha.php">Voltar</a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="container">
    <form>
      <?php
      $ultima_campanha = mysqli_fetch_assoc($sql);
      echo "<h1>" . $ultima_campanha['nome_campanha'] . "</h1>";
      ?>
      <p>Lista de itens requisitados na última campanha</p>
      <table>
        <thread>
          <tr class="primeira-linha"></tr>
          <th>Camisa</th>
          <th>Calça</th>
          <th>Sapato</th>
          <th>Meia</th>
          <th>Cueca</th>
        </thread>
        <tbody>
          <?php
          //while ($ultima_campanha = mysqli_fetch_assoc($sql)) {
          echo "<tr></tr>";
          echo "<td>" . $ultima_campanha['camisa'] . "</td>";
          echo "<td>" . $ultima_campanha['calca'] . "</td>";
          echo "<td>" . $ultima_campanha['sapato'] . "</td>";
          echo "<td>" . $ultima_campanha['meia'] . "</td>";
          echo "<td>" . $ultima_campanha['cueca'] . "</td>";
          //}
          ?>
        </tbody>
      </table>
      <a class="btn-enviar" href="tela_inicial.php">
        <span id="enviar">Tela inicial</span>
      </a>
    </form>
  </main>
</body>

</html>