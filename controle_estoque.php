<?php include "cabecalho.php" ?>

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
  <form action="">
    <a class="pesquisar-item" href="">
      <p>Pesquisar item</p>
    </a>
    <label for="">
      <span>Tipo item</span>
      <select name="tipo-item" id="tipo-item">
        <option value="disable">Nenhum</option>
        <option value="1">Camisa</option>
        <option value="2">Calça</option>
        <option value="3">Sapato</option>
        <option value="4">Meia</option>
        <option value="5">Cueca</option>
      </select>
    </label>
    <label>
      <span>Tamanho</span>
      <select name="tamanho-item" id="tamanho-item">
        <option value="disable">Nenhum</option>
        <option value="1">P</option>
        <option value="2">M</option>
        <option value="3">G</option>
        <option value="4">GG</option>
        <option value="5">EG</option>
      </select>
    </label>

    <div class="entrada-saida">
      <label class="label-select" for="">
        <span>Entrada</span>
        <input placeholder="" type="number" name="quantidade-item" id="quantidade-entrada" class="validate" />
      </label>

      <label for="">
        <span>Saída</span>
        <input placeholder="" type="number" id="quantidade-saida" class="validate" />
      </label>
    </div>
    <a class="btn-enviar" href="tela_inicial.php">
      <span id="cadastrar">Cadastrar</span>
    </a>
  </form>
</body>

</html>