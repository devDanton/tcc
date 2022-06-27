<?php
include_once "cabecalho.php";
include_once "protecao.php";
include_once "conexao.php";
if (!isset($_SESSION)) {
  session_start();
}
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
    <label for="">
      <span>Tipo item</span>
      <select name="id_categoria" id="id_categoria">
        <option value="">Escolha o tipo de item</option>
        <?php
        $result_cat_post = "SELECT * FROM categoria ORDER BY id";
        $resultado_cat_post = mysqli_query($conexao, $result_cat_post);
        while ($row_cat_post = mysqli_fetch_assoc($resultado_cat_post)) {
          echo '<option value="' . $row_cat_post['id'] . '">' . $row_cat_post['nome'] . '</option>';
          $v1 = $row_cat_post['id'];
          $v2 =  $row_cat_post['nome'];
        }
        ?>

      </select>
    </label>
    <label>
      <?php
      echo $v1;
      echo $v2;
      ?>
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
    </div>

    <button class="btn-enviar" type="submit">
      <a id="enviar">Avançar</a>
    </button>

  </form>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
  </script>

</body>

</html>