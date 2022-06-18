<?php
include "cabecalho.php";
include_once "conexao.php";
$camisa = "";
$calca = "";
$sapato = "";
$meia = "";
$cueca = "";
$status = false;
$id_atual = "";

if (isset($_POST["camisa"], $_POST["calca"], $_POST["sapato"], $_POST["meia"], $_POST["cueca"])) {
  $camisa = filter_input(INPUT_POST, "camisa");
  $calca = filter_input(INPUT_POST, "calca");
  $sapato = filter_input(INPUT_POST, "sapato");
  $meia = filter_input(INPUT_POST, "meia");
  $cueca = filter_input(INPUT_POST, "cueca");

  if (!$camisa || !$calca || !$sapato || !$meia || !$cueca) {
    $mensagem = "Dados inválidos!";
  } else {
    $id_atual = $_POST('id_atual');
    echo $id_atual;
    //$result_usuario = "INSERT INTO doador(tamanho_camisa, tamanho_calca, tamanho_sapato, tamanho_meia, tamanho_cueca) VALUES('$camisa','$calca','$sapato','$meia', '$cueca') ";
    //$resultado_usuario = mysqli_query($conexao, $result_usuario);

    /*if (mysqli_insert_id($conexao)) {
      $_SESSION['msg'] = "<p style='color:green;'>Enviado com sucesso!</p>";
      header('Location: cadastro_doador3.php');
    } else {
      $_SESSION['msg'] = "<p style='color:red;'>Falha no envio</p>";
      header('Location: cadastro_doador2.php');
    }*/
  }
}
?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="index.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="cadastro_doador.php">Voltar</a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="container">
    <form method="POST">
      <h1>Medidas vestuário</h1>
      <div class="label">
        <span>Camisa</span>
        <label class="label_select">
          <select class="browser-default" name="camisa" required>
            <option value="" disabled selected>Nenhum</option>
            <option value="P">P</option>
            <option value="P">P</option>
            <option value="M">M</option>
            <option value="G">G</option>
            <option value="GG">GG</option>
            <option value="EG">EG</option>
            <option value="EGG">EGG</option>
          </select>
        </label>
      </div>

      <div class="label">
        <span>Calça</span>
        <label class="label_select">
          <select class="browser-default" name="calca" required>
            <option value="" disabled selected>Nenhum</option>
            <option value="36">36</option>
            <option value="38">38</option>
            <option value="40">40</option>
            <option value="42">42</option>
            <option value="44">44</option>
            <option value="46">46</option>
            <option value="48">48</option>
            <option value="50">50</option>
            <option value="52">52</option>
            <option value="54">54</option>
            <option value="56">56</option>
            <option value="58">58</option>
          </select>
        </label>
      </div>

      <div class="label">
        <span>Sapato</span>
        <label class="label_select">
          <select class="browser-default" name="sapato" required>
            <option value="" disabled selected>Nenhum</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
          </select>
        </label>
      </div>

      <div class="label">
        <span>Meia</span>
        <label class="label_select">
          <select class="browser-default" name="meia" required>
            <option value="" disabled selected>Nenhum</option>
            <option value="PP">PP</option>
            <option value="P">P</option>
            <option value="M">M</option>
            <option value="G">G</option>
          </select>
        </label>
      </div>

      <div class="label">
        <span>Cueca</span>
        <label class="label_select">
          <select class="browser-default" name="cueca" required>
            <option value="" disabled selected>Nenhum</option>
            <option value="P">P</option>
            <option value="M">M</option>
            <option value="G">G</option>
            <option value="GG">GG</option>
          </select>
        </label>
      </div>
      <button class="btn-enviar" type="submit">
        <a id="enviar">Enviar</a>
      </button>

      <?php
      echo $camisa;
      echo $calca;
      echo $sapato;
      echo $meia;
      echo "$cueca <br>";
      echo $id_atual;


      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg']; //imprime mensagem de sucesso ou erro
        unset($_SESSION['msg']); //destroi variavel
      }
      ?>
    </form>
    <?php
    if ($status == true) {
      header('Location: cadastro_doador3.php');
    }
    ?>
  </main>
</body>

</html>