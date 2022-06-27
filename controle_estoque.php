<?php
include_once "cabecalho.php";
include_once "protecao.php";
include_once "conexao.php";
if (!isset($_SESSION)) {
  session_start();
}

$sql = "SELECT * FROM item ORDER BY id ASC";
$result_sql = mysqli_query($conexao, $sql);

print_r($result_sql);
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
    <a class="pesquisar-item" href="">
      <p>Pesquisar item</p>
    </a>

    <table class="table">
      <thread>
        <tr class="primeira-linha">
          <th>#</th>
          <th>Nome</th>
          <th>Tamanho</th>
          <th>Disponib.</th>
          <th>Ações</th>
        </tr>
      </thread>
      <tbody>
        <?php
        while ($result_item = mysqli_fetch_assoc($result_sql)) {
          echo "<tr>";
          echo "<td>" . $result_item['id'] . "</td>";
          echo "<td>" . $result_item['nome'] . "</td>";
          echo "<td>" . $result_item['tamanho'] . "</td>";
          echo "<td>" . $result_item['entrada'] - $result_item['saida'] . "</td>";
          echo "<td>
              <a href='edit_estoque.php?id=$result_item[id]'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                </svg>
              </a>
            </td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>

    <button class="btn-enviar" type="submit">
      <a id="enviar">Avançar</a>
    </button>

  </form>
  <!-- <label for="">
      <span>Tipo item</span>
      <select name="id_categoria" id="id_categoria">
        <option value="">Escolha o tipo de item</option>
      </select>
    </label>
    <label>
      <span>Tamanho</span>
      <span class="carregando">Aguarde, carregando...</span>
      <select name="id_sub_categoria" id="id_sub_categoria">
        <option value="">Escolha o tamanho do item</option>
      </select>
    </label>

    <div class="entrada-saida">
      <label class="label-select" for="">
        <span>Entrada</span>
        <input placeholder="" type="number" name="quantidade-entrada" id="quantidade-entrada" class="validate" />
      </label>

      <label for="">
        <span>Saída</span>
        <input placeholder="" type="number" name="quantidade-saida" id="quantidade-saida" class="validate" />
      </label>
    </div> -->

  <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
    google.load("jquery", "1.4.2");
  </script>

  <script type="text/javascript">
    $(function() {
      $('#id_categoria').change(function() {
        if ($(this).val()) {
          $('#id_sub_categoria').hide();
          $('.carregando').show();
          $.getJSON('sub_categorias_post.php?search=', {
            id_categoria: $(this).val(),
            ajax: 'true'
          }, function(j) {
            var options = '<option value="">Escolha Subcategoria</option>';
            for (var i = 0; i < j.length; i++) {
              options += '<option value="' + j[i].id + '">' + j[i].tamanho_item + '</option>';
            }
            $('#id_sub_categoria').html(options).show();
            $('.carregando').hide();
          });
        } else {
          $('#id_sub_categoria').html('<option value="">– Escolha Subcategoria –</option>');
        }
      });
    });
  </script> -->

</body>

</html>