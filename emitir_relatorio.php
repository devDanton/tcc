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
            <!-- <img class="li-img" src="icons/icon_cadastro_donatario.svg" /> -->
            <h2>Relatório donatários cadastrados</h2>
            <span id="spanHome">Disponibiliza uma lista em arquivo .pdf de todos os donatários cadastrados.</span>
          </a>
        </li>

        <li id="li-funcoes">
          <a href="criar_campanha.php">
            <img class="li-img" src="icons/icon_criar_campanhasvg.svg" />
            <h2>Criar campanha</h2>
            <span id="spanHome">Cadastramento de campanhas com o objetivo de arrecadar itens
              requisitados.
            </span>
          </a>
        </li>

        <li id="li-funcoes">
          <a href="controle_estoque.php">
            <img class="li-img" src="icons/icon_controle_estoque.svg" />
            <h2>Controle de estoque</h2>
            <span id="spanHome">Cadastramento dos itens recebidos através das doações.</span>
          </a>
        </li>

        <li id="li-funcoes">
          <a href="emitir_relatorio.php">
            <img class="li-img" src="icons/icon_emitir_relatorio.svg" />
            <h2>Emitir relatório</h2>
            <span id="spanHome">Emissão de relatórios dos itens requisitados e de pessoas que
              necessitem de doação.</span>
          </a>
        </li>
      </ul>
    </div>
  </main>
</body>

</html>