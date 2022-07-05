<?php
include_once "cabecalho.php";
include_once "protecao.php";
include_once "conexao.php";
if (!isset($_SESSION)) {
  session_start();
}
$html = "";
$result_donatario = "SELECT * FROM doador";
$resultado_donatario = mysqli_query($conexao, $result_donatario);

?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="tela_inicial.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="emitir_relatorio.php">Voltar</a>
        </li>
      </ul>
    </nav>
  </header>
  <form method="POST" action="dompdf.php">
    <h1>Lista de doadores cadastrados</h1>
  <?php
  $html .=  "<table class='table'>";
  //$html .= "<thread>";
  $html .= "<tr class='primeira_linha'>";
  $html .= "<th>#</th>";
  $html .=  "<th>Nome</th>";
  $html .= "<th>Data nasimento</th>";
  $html .= "<th>Telefone</th>";
  $html .= "<th>Email</th>";
  $html .= "<th>Endereço</th>";
  $html .= "<th>Bairro</th>";
  $html .= "<th>Numero</th>";
  $html .= "<th>Genero</th>";
  $html .= "<th>Camisa</th>";
  $html .= " <th>Calça</th>";
  $html .= "<th>Sapato</th>";
  $html .= "<th>Meia</th>";
  $html .= "<th>Calcinha / Cueca</th>";
  $html .= "</tr>";
  //$html .= "</thread>";
  $html .= "<tbody>";
  ?>
        <?php
        while ($row_doador = mysqli_fetch_assoc($resultado_donatario)) {
          $html .= "<tr>";
          $html .= "<td>" . $row_doador['id'] . "</td>";
          $html .= "<td>" . $row_doador['nome'] . "</td>";
          $html .= "<td>" . $row_doador['data_nascimento'] . "</td>";
          $html .= "<td>" . $row_doador['telefone'] . "</td>";
          $html .= "<td>" . $row_doador['email'] . "</td>";
          $html .= "<td>" . $row_doador['endereco'] . "</td>";
          $html .= "<td>" . $row_doador['bairro'] . "</td>";
          $html .= "<td>" . $row_doador['numero'] . "</td>";
          $html .= "<td>" . $row_doador['genero'] . "</td>";
          $html .= "<td>" . $row_doador['tamanho_camisa'] . "</td>";
          $html .= "<td>" . $row_doador['tamanho_calca'] . "</td>";
          $html .= "<td>" . $row_doador['tamanho_sapato'] . "</td>";
          $html .= "<td>" . $row_doador['tamanho_meia'] . "</td>";
          $html .= "<td>" . $row_doador['tamanho_cueca'] . "</td>";
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