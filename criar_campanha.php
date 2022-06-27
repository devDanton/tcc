<?php
include_once "cabecalho.php";
include_once "conexao.php";
include_once "protecao.php";

if (!isset($_SESSION)) {
  session_start();
}
$nome_campanha = null;
$camisa_P = null;
$calca_P = null;
$sapato_P = null;
$meia_P = null;
$cueca_P = null;
$mensagem = "";
if (isset($_POST["nome_campanha"], $_POST["ckCamisa"], $_POST["ckCalca"], $_POST["ckSapato"], $_POST["ckMeia"], $_POST["ckCueca"])) {
  $nome_campanha = $_POST["nome_campanha"];
  $camisa_P = $_POST['ckCamisa'];
  $calca_P = $_POST['ckCalca'];
  $sapato_P = $_POST['ckSapato'];
  $meia_P = $_POST['ckMeia'];
  $cueca_P = $_POST['ckCueca'];
}
if ($nome_campanha != null || $camisa_P != null || $calca_P != null || $sapato_P != null || $meia_P != null || $cueca_P != null) {

  $camisa = implode(", ", $camisa_P);
  $calca = implode(", ", $calca_P);
  $sapato = implode(", ", $sapato_P);
  $meia = implode(", ", $meia_P);
  $cueca = implode(", ", $cueca_P);

  /*
  echo $camisa;
  echo $calca;
  echo $sapato;
  echo $meia;
  echo $cueca;
  */

  $result_usuario = "INSERT INTO campanha (nome_campanha, camisa, calca, sapato, meia, cueca) VALUES ('$nome_campanha', '$camisa', '$calca', '$sapato', '$meia', '$cueca')";
  $resultado_usuario = mysqli_query($conexao, $result_usuario);

  if (mysqli_insert_id($conexao)) {
    $_SESSION['msg'] = "<p style='color:green;'>Enviado com sucesso!</p>";
    header('Location: criar_campanha2.php');
  } else {
    $_SESSION['msg'] = "<span style='color:red; display: flex; left:10px;'>Falha no envio</span>";
    header('Location:criar_campanha.php');
  }
  $mensagem = $_SESSION['msg'];
  unset($_SESSION['msg']);
} else {
  $mensagem = "<span style='color:red; display: flex; margin: 10px  ;'>Selecione pelo menos um tamanho de cada tipo de roupa</span>";
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

  <main class="container">
    <form action="" method="POST">
      <h1>Criar campanha</h1>
      <label for="nome_campanha">
        <span>Nome da campanha</span>
        <input placeholder="" id="nome_campanha" name="nome_campanha" type="text" class="validate" required />
      </label>
      <h2>Selecione o tamanho dos itens mais requisitados</h2>
      <div class="select-checkbox">
        <div class="lb">
          <span>Camisa</span>

          <label class="multiple-size">
            <input type="checkbox" name="ckCamisa[]" id="checkbox" value="PP">
            <span>PP</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCamisa[]" id="checkbox" value="P">
            <span>P</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCamisa[]" id="checkbox" value="M">
            <span>M</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCamisa[]" id="checkbox" value="G">
            <span>G</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCamisa[]" id="checkbox" value="GG">
            <span>GG</span>
          </label>
          <label class="multiple-size">
            <input type="checkbox" name="ckCamisa[]" id="checkbox" value="EGG">
            <span>EGG</span>
          </label>
        </div>

        <div class="lb">
          <span>Calça</span>
          <label class="multiple-size">

            <input type="checkbox" name="ckCalca[]" value="36" id="checkbox">
            <span>36
            </span>
          </label>
          <label class="multiple-size">

            <input type="checkbox" name="ckCalca[]" value="38" id="checkbox">
            <span>38</span>
          </label>
          <label class="multiple-size">

            <input type="checkbox" name="ckCalca[]" value="40" id="checkbox">
            <span>40</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCalca[]" value="42" id="checkbox">
            <span>42</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCalca[]" value="44" id="checkbox">
            <span>44</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCalca[]" value="46" id="checkbox">
            <span>46</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCalca[]" value="48" id="checkbox">
            <span>48</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCalca[]" value="50" id="checkbox">
            <span>50</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCalca[]" value="52" id="checkbox">
            <span>52</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCalca[]" value="54" id="checkbox">
            <span>54</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCalca[]" value="56" id="checkbox">
            <span>56</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCalca[]" value="58" id="checkbox">
            <span>58</span>
          </label>
        </div>
        <div class="lb">
          <span>Sapato</span>
          <label class="multiple-size">

            <input type="checkbox" name="ckSapato[]" value="36" id="checkbox">
            <span>36
            </span>
          </label>
          <label class="multiple-size">

            <input type="checkbox" name="ckSapato[]" value="37" id="checkbox">
            <span>37</span>
          </label>
          <label class="multiple-size">

            <input type="checkbox" name="ckSapato[]" value="38" id="checkbox">
            <span>38</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckSapato[]" value="39" id="checkbox">
            <span>39</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckSapato[]" value="40" id="checkbox">
            <span>40</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckSapato[]" value="41" id="checkbox">
            <span>41</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckSapato[]" value="42" id="checkbox">
            <span>42</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckSapato[]" value="43" id="checkbox">
            <span>43</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckSapato[]" value="44" id="checkbox">
            <span>44</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckSapato[]" value="45" id="checkbox">
            <span>45</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckSapato[]" value="46" id="checkbox">
            <span>46</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckSapato[]" value="47" id="checkbox">
            <span>47</span>
          </label>
        </div>

        <div class="lb">
          <span>Meia</span>
          <label class="multiple-size">
            <input type="checkbox" name="ckMeia[]" value="P" id="checkbox">
            <span>P</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckMeia[]" value="M" id="checkbox">
            <span>M</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckMeia[]" value="G" id="checkbox">
            <span>G</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckMeia[]" value="G" id="checkbox">
            <span>GG</span>
          </label>

        </div>

        <div class="lb">
          <span>Cueca</span>
          <label class="multiple-size">
            <input type="checkbox" name="ckCueca[]" value="P" id="checkbox">
            <span>P</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCueca[]" value="M" id="checkbox">
            <span>M</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCueca[]" value="G" id="checkbox">
            <span>G</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCueca[]" value="GG" id="checkbox">
            <span>GG</span>
          </label>

          <label class="multiple-size">
            <input type="checkbox" name="ckCueca[]" value="GG" id="checkbox">
            <span>EGG</span>
          </label>
        </div>
      </div>
      <?php
      echo $mensagem;
      ?>
      <button class="btn-enviar" type="submit">
        <a id="enviar">Avançar</a>
      </button>
    </form>
  </main>
</body>

</html>