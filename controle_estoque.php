<?php
include_once "cabecalho.php";
include_once "protecao.php";
include_once "conexao.php";
if (!isset($_SESSION)) {
  session_start();
}

$sql = "SELECT * FROM item ORDER BY id ASC";
$result_sql = mysqli_query($conexao, $sql);
?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="tela_inicial.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="tela_inicial.php">Voltar</a>
        </li>
      </ul>
    </nav>
  </header>
  <form method="POST" action="">
    <table class="table">
      <thread>
        <tr class="primeira-linha">
          <th>#</th>
          <th>Nome</th>
          <th>Tamanho</th>
          <th>Disponib.</th>
          <th>Ações</th>
        </tr>
      </thread>
      <tbody>
        <?php
        while ($result_item = mysqli_fetch_assoc($result_sql)) {
          echo "<tr>";
          echo "<td>" . $result_item['id'] . "</td>";
          echo "<td>" . $result_item['nome'] . "</td>";
          echo "<td>" . $result_item['tamanho'] . "</td>";
          echo "<td>" . $result_item['entrada'] - $result_item['saida'] . "</td>";
          echo "<td>
              <a href='edit_estoque.php?id=$result_item[id]'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                </svg>
              </a>
            </td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>

    <!-- <button class="btn-enviar" type="submit">
      <a id="enviar">Avançar</a>
    </button> -->

  </form>
</body>

</html>