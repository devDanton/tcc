<?php
include_once "cabecalho.php";
include "protecao.php";
?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="index.html">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="logout.php">Sair</a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="container">
    <div class="campanha">
      <ul class="list-funcoes">
        <li id="li-funcoes">
          <a href="cadastro_donatario.html">
            <img class="li-img" src="icons/icon_cadastro_donatario.svg" />
            <h2>Cadastrar donatário</h2>
            <span id="spanHome">Cadasto de pessoas carentes as quais necessitam de
              roupas.</span>
          </a>
        </li>

        <li id="li-funcoes">
          <a href="criar_campanha.html">
            <img class="li-img" src="icons/icon_criar_campanhasvg.svg" />
            <h2>Criar campanha</h2>
            <span id="spanHome">Cadastramento de campanhas com o objetivo de arrecadar itens
              requisitados.
            </span>
          </a>
        </li>

        <li id="li-funcoes">
          <a href="controle_estoque.html">
            <img class="li-img" src="icons/icon_controle_estoque.svg" />
            <h2>Controle de estoque</h2>
            <span id="spanHome">Cadastramento dos itens recebidos através das doações.</span>
          </a>
        </li>

        <li id="li-funcoes">
          <a href="emitir_relatorio.html">
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