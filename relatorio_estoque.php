<?php
include_once "cabecalho.php";
include_once "protecao.php";
include_once "conexao.php";
$html="";
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
  <form method="POST" action="dompdf.php">
  <button class="btn-seja-doador">Gerar relatório</button> 
  <?php
  $html .=  "<table class='table'>";
  //$html .= "<thread>";
  $html .= "<tr class='primeira_linha'>";
  $html .= "<th>#</th>";
  $html .= "<th>Nome</th>";
  $html .= "<th>Tamanho</th>";
  $html .= "<th>Disponib.</th>";
  $html .= "</tr>";
  //$html .= "</thread>";
  $html .= "<tbody>";
        while ($result_item = mysqli_fetch_assoc($result_sql)) {
          $html .= "<tr>";
          $html .= "<td>" . $result_item['id'] . "</td>";
          $html .= "<td>" . $result_item['nome'] . "</td>";
          $html .= "<td>" . $result_item['tamanho'] . "</td>";
          $html .= "<td>" . $result_item['entrada'] - $result_item['saida'] . "</td>";
          $html .= "</tr>";
        }
        $_SESSION['html'] = $html;
        print_r($html);
        ?>
      </tbody>
    </table>
  </form>
</body>

</html>