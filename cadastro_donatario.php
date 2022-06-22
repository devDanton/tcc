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
  <main>
    <form>
      <h1>Dados pessoais donatário</h1>

      <div>
        <img class="perfil-img" src="icons/Inserir foto.svg" alt="Foto de perfil do usuário" />
      </div>

      <label for="nome_completo">
        <span>Nome completo</span>
        <input placeholder="" id="nome_completo" type="text" class="validate" />
      </label>
      <label for="data_nascimento">
        <span>Data de nascimento</span>
        <input id="" type="date" class="validate" />
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

      <a class="btn-enviar" href="cadastro_donatario2.php">
        <span id="enviar">Avançar</span>
      </a>
    </form>
  </main>
</body>

</html>