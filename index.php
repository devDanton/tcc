<?php include "cabecalho.php"

?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="index.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="">Voltar</a>
        </li>
        <li>
          <a href="cadastro_funcionario.php" class="btn_criar_conta">Criar conta</a>
        </li>
        <li>
          <a href="login_funcionario.php" class="btn_entrar">Entrar</a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="container">
    <div class="campanha">
      <h1>Faça o bem, ajude o próximo!</h1>
      <ul class="list-campanha">
        <li>
          <a href="">
            <img class="activator" src="imagens/img_home1.svg" />
          </a>
        </li>

        <li>
          <a href="">
            <img class="activator" src="imagens/img_home2.svg" />
          </a>
        </li>

        <li>
          <a href="">
            <img class="activator" src="imagens/img_home3.svg" />
          </a>
        </li>
      </ul>

      <ul class="list-botoes">
        <li>
          <button class=" btn-seja-doador">
            <a href="formulario_doador.php">Seja um colaborador</a>
          </button>
        </li>

        <li><button class="btn-seja-doador">
            <a href="formulario_donatario.php">Cadastro de necessitados</a>
          </button>
        </li>
      </ul>
    </div>
  </main>
</body>

</html>