<?php
include_once "cabecalho.php";
include_once "protecao.php";
include_once "conexao.php";
if (!isset($_SESSION)) {
  session_start();
}
$html = "";
$result_donatario = "SELECT * FROM campanha";
$resultado_donatario = mysqli_query($conexao, $result_donatario);

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
  <?php
  $html .=  "<table class='table'>";
  //$html .= "<thread>";
  $html .= "<tr class='primeira_linha'>";
  $html .= "<th>Nome</th>";
  $html .= "<th>Camisa</th>";
  $html .= "<th>Calça</th>";
  $html .= "<th>Meia</th>";
  $html .= "<th>Cueca</th>";
  $html .= "</tr>";
  //$html .= "</thread>";
  $html .= "<tbody>";
  ?>
        <?php
        while ($row_campanha = mysqli_fetch_assoc($resultado_donatario)) {
          $html .= "<tr>";
          $html .= "<td>" . $row_campanha['nome_campanha'] . "</td>";
          $html .= "<td>" . $row_campanha['camisa'] . "</td>";
          $html .= "<td>" . $row_campanha['calca'] . "</td>";
          $html .= "<td>" . $row_campanha['meia'] . "</td>";
          $html .= "<td>" . $row_campanha['cueca'] . "</td>";
          $html .= "</tr>";

        }
        $html .= "</tbody>";
        $html .= "</table>";
        $_SESSION['html'] = $html;
        print_r($html);
        ?>
    <button class="btn-seja-doador">Gerar relatório</button> 
  </form>
</html>