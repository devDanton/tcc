<?php
include_once "cabecalho.php";
include_once "protecao.php";
include_once "conexao.php";
$html = "";

$result_donatario = "SELECT * FROM donatario";
$resultado_donatario = mysqli_query($conexao, $result_donatario);


$html .= "<form method='POST' action=''>";
$html .= "<table class='table'>";
$html .= "<thread>";
$html .= "<tr class='primeira-linha'>";
$html .= "<th>#</th>";
$html .= "<th>Nome</th>";
$html .= "<th>Data nasimento</th>";
$html .= "<th>Telefone</th>";
$html .= "<th>Email</th>";
$html .= "<th>Endereço</th>";
$html .= "<th>Bairro</th>";
$html .= "<th>Numero</th>";
$html .= "<th>Genero</th>";
$html .= "<th>Camisa</th>";
$html .= "<th>Calça</th>";
$html .= "<th>Sapato</th>";
$html .= "<th>Meia</th>";
$html .= "<th>Calcinha / Cueca</th>";
$html .= "</tr>";
$html .= "</thread>";
$html .= "<tbody>";
while ($row_donatario = mysqli_fetch_assoc($resultado_donatario)) {
  $html .= '<tr>';
  $html .= "<td>" . $row_donatario['id'] . "</td>";
  $html .= "<td>" . $row_donatario['nome'] . "</td>";
  $html .= "<td>" . $row_donatario['data_nascimento'] . "</td>";
  $html .= "<td>" . $row_donatario['telefone'] . "</td>";
  $html .= "<td>" . $row_donatario['email'] . "</td>";
  $html .= "<td>" . $row_donatario['endereco'] . "</td>";
  $html .= "<td>" . $row_donatario['bairro'] . "</td>";
  $html .= "<td>" . $row_donatario['numero'] . "</td>";
  $html .= "<td>" . $row_donatario['genero'] . "</td>";
  $html .= "<td>" . $row_donatario['tamanho_camisa'] . "</td>";
  $html .= "<td>" . $row_donatario['tamanho_calca'] . "</td>";
  $html .= "<td>" . $row_donatario['tamanho_sapato'] . "</td>";
  $html .= "<td>" . $row_donatario['tamanho_meia'] . "</td>";
  $html .= "<td>" . $row_donatario['tamanho_cueca'] . "</td>";
  $html .= "</tr>";
}

$html .= "</tbody>";
$html .= "</table>";

//referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// include autoloader
require_once "dompdf/vendor/autoload.php";

//Criando a Instancia
$dompdf = new DOMPDF();

// Carrega seu HTML
$dompdf->loadHtml('
 Relatório de donátarios cadastrados
 ');

//Renderizar o html
$dompdf->render();

//Exibibir a página
$dompdf->stream(
  "relatorio_donatarios.pdf",
  array(
    "Attachment" => false //Para realizar o download somente alterar para true
  )
);
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
          <th>Data nasimento</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Endereço</th>
          <th>Bairro</th>
          <th>Numero</th>
          <th>Genero</th>
          <th>Camisa</th>
          <th>Calça</th>
          <th>Sapato</th>
          <th>Meia</th>
          <th>Calcinha / Cueca</th>
        </tr>
      </thread>
      <tbody>
        <!-- <?php
              /*while ($row_donatario = mysqli_fetch_assoc($resultado_donatario)) {
          echo "<tr>";
          echo "<td>" . $row_donatario['id'] . "</td>";
          echo '<td>' . $row_donatario['nome'] . "</td>";
          echo '<td>' . $row_donatario['data_nascimento'] . "</td>";
          echo '<td>' . $row_donatario['telefone'] . "</td>";
          echo '<td>' . $row_donatario['email'] . "</td>";
          echo '<td>' . $row_donatario['endereco'] . "</td>";
          echo '<td>' . $row_donatario['bairro'] . "</td>";
          echo '<td>' . $row_donatario['numero'] . "</td>";
          echo '<td>' . $row_donatario['genero'] . "</td>";
          echo '<td>' . $row_donatario['tamanho_camisa'] . "</td>";
          echo '<td>' . $row_donatario['tamanho_calca'] . "</td>";
          echo '<td>' . $row_donatario['tamanho_sapato'] . "</td>";
          echo '<td>' . $row_donatario['tamanho_meia'] . "</td>";
          echo '<td>' . $row_donatario['tamanho_cueca'] . "</td>";
          echo "</tr>";
        }*/
              ?> -->
      </tbody>
    </table>

    </html>