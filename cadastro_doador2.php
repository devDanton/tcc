<?php include "cabecalho.php";
include "conexao.php";
$mensagem = "Preencha todos os campos!";
$camisa = "";
$calca = "";
$sapato = "";
$meia = "";
$cueca = "";
$status = false;

if (isset($_POST["camisa"], $_POST["calca"], $_POST["sapato"], $_POST["meia"], $_POST["cueca"])) {
  //filtrando inputs para remover caracteres que não correspondem ao padrão
  $camisa = filter_input(INPUT_POST, "camisa", FILTER_SANITIZE_STRING);
  $calca = filter_input(INPUT_POST, "calca", FILTER_SANITIZE_NUMBER_INT);
  $sapato = filter_input(INPUT_POST, "sapato", FILTER_SANITIZE_NUMBER_INT);
  $meia = filter_input(INPUT_POST, "meia", FILTER_SANITIZE_STRING);
  $cueca = filter_input(INPUT_POST, "cueca", FILTER_SANITIZE_STRING);


  if (!$camisa || !$calça || !$sapato || !$meia || !$cueca) {
    $mensagem = "Dados inválidos!";
  } else {
    /*statement*/
    $stm = $conexao->prepare('INSERT INTO doador (tamanho_camisa, tamanho_calca, tamanho_sapato, tamanho_meia, tamanho_cueca) VALUES (:camisa, :calça, :sapato, :meia, :cueca)');
    $stm->bindParam('camisa', $camisa);
    $stm->bindParam('calca', $calca);
    $stm->bindParam('sapato', $sapato);
    $stm->bindParam('meia', $meia);
    $stm->bindParam('cueca', $cueca);
    $stm->execute();
  }
  $status = true;
  $mensagem = "Enviado com sucesso!";
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
        <label class="label_select" name="calca">
          <select class="browser-default" required>
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
        <label class="label_select" name="sapato">
          <select class="browser-default" required>
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
        <label class="label_select" name="meia">
          <select class="browser-default" required>
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
        <label class="label_select" name="cueca">
          <select class="browser-default" required>
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
    </form>
    <?php
    if ($status == true) {
      header('Location: cadastro_doador3.php');
    }
    ?>
  </main>
</body>

</html>