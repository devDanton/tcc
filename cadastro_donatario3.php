<?php include "cabecalho.php" ?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="tela_inicial.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="cadastro_donatario2.php">Voltar</a>
        </li>
      </ul>
    </nav>
  </header>

  <main>
    <form action="">
      <h1>Cadastro de familiar</h1>
      <label class="pesquisar-familiar" for="pesquisar_familiar">
        <a class="familiar-cadastrado" href="">
          <p>Pesquisar familiar cadastrado</p>
        </a>
      </label>

      <h1>Cadastrar familiar</h1>
      <label for="nome_completo">
        <span>Nome completo</span>
        <input placeholder="" id="nome_completo" type="text" class="validate" />
      </label>
      <label for="data_nascimento">
        <span>Data de nascimento</span>
        <input id="data_nascimento" type="date" class="validate" />
      </label>

      <label for="telefone">
        <span>Telefone</span>
        <input placeholder="" id="telefone" type="text" class="validate" />
      </label>

      <label for="email">
        <span>E-mail</span>
        <input placeholder="" id="email" type="email" class="validate" />
      </label>

      <label for="endereco">
        <span>Endereço</span>
        <input placeholder="" id="endereco" type="text" class="validate" />
      </label>

      <label for="numero">
        <span>Número</span>
        <input placeholder="" id="numero" type="number" class="validate" />
      </label>

      <label for="bairro">
        <span>Bairro</span>
        <input id="bairro" type="text" class="validate" />
      </label>

      <a class="btn-enviar" href="tela_inicial.php">
        <span id="enviar">Enviar</span>
      </a>
    </form>
  </main>
</body>

</html>