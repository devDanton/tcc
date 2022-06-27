<?php include "cabecalho.php";
include_once "conexao.php";
$script_sql = "Select MAX(id) FROM campanha";
$sql = mysqli_query($conexao, $script_sql);
$ultima_insercao = mysqli_fetch_array($sql);
$script_sql = "SELECT * FROM campanha WHERE id = '$ultima_insercao[0]'";
$sql = mysqli_query($conexao, $script_sql);
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
            <a href="formulario_donatario.php">Cadastro de pessoa carente</a>
          </button>
        </li>
      </ul>

      <?php
      $ultima_campanha = mysqli_fetch_assoc($sql);
      echo "<h1>" . $ultima_campanha['nome_campanha'] . "</h1>";
      ?>
      <p style="display: flex; justify-content: center;">Lista de itens requisitados</p>

    </div>
    <table>
      <thread>
        <tr class="primeira-linha"></tr>
        <th>Camisa</th>
        <th>Calça</th>
        <th>Sapato</th>
        <th>Meia</th>
        <th>Cueca</th>
      </thread>
      <tbody>
        <?php
        //while ($ultima_campanha = mysqli_fetch_assoc($sql)) {
        echo "<tr></tr>";
        echo "<td>" . $ultima_campanha['camisa'] . "</td>";
        echo "<td>" . $ultima_campanha['calca'] . "</td>";
        echo "<td>" . $ultima_campanha['sapato'] . "</td>";
        echo "<td>" . $ultima_campanha['meia'] . "</td>";
        echo "<td>" . $ultima_campanha['cueca'] . "</td>";
        //}
        ?>
      </tbody>
    </table>
  </main>
</body>

</html>