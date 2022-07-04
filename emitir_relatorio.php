<?php
include "cabecalho.php";
include_once "protecao.php";
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

  <main class="container">
    <div class="campanha">
      <ul class="list-funcoes">
        <li id="li-funcoes">
          <a href="relatorio_donatarios.php">
            <img class="li-img" src="icons/icon_cadastro_donatario.svg" />
            <h2>Consultar donatários cad.</h2>
            <span id="spanHome">Disponibiliza uma lista de todos os donatários cadastrados e possibilita gerar relatório.</span>
          </a>
        </li>

        <li id="li-funcoes">
          <a href="relatorio_doadores.php">
            <img class="li-img" src="icons/icon_cons_doad.svg" />
            <h2>Consultar doadores cad.</h2>
            <span id="spanHome">Disponibiliza uma lista de todos os donadores cadastrados e possibilita gerar relatório.</span>
          </a>
        </li>

        <li id="li-funcoes">
          <a href="relatorio_estoque.php">
            <img class="li-img" src="icons/icon_controle_estoque.svg" />
            <h2>Consultar estoque</h2>
            <span id="spanHome">Disponibiliza informações do estoque e possibilita gerar relatório.</span>
          </a>
        </li>

        <li id="li-funcoes">
          <a href="relatorio_campanhas.php">
            <img class="li-img" src="icons/icon_criar_campanhasvg.svg" />
            <h2>Consultar campanhas</h2>
            <span id="spanHome">Disponibiliza uma lista de todas as campanhas cadastrados e possibilita gerar relatório.</span>
          </a>
        </li>
      </ul>
    </div>
  </main>
</body>

</html>