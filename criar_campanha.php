<?php include "cabecalho.php";
include "cabecalho.php";
include_once "conexao.php";

if (!isset($_SESSION)) {
  session_start();
}

$camisa = "";
$calca = "";
$sapato = "";
$meia = "";
$cueca = "";

if (isset($_POST["ckCamisa"], $_POST["ckCalca"], $_POST["ckSapato"], $_POST["ckMeia"], $_POST["ckCueca"])) {
  $camisa = $_POST['ckCamisa'];
  $calca = $_POST['ckCalca'];
  $sapato = $_POST['ckSapato'];
  $meia = $_POST['ckMeia'];
  $cueca = $_POST['ckCueca'];
}
if ($camisa != "" || $calca != "" || $sapato != "" || $meia != "" || $cueca != "") {
  for ($i = 0; $i < count($camisa); $i++) {
    echo "<p>{$camisa[$i]}</p>";
    echo "<p>{$calca[$i]}</p>";
    echo "<p>{$sapato[$i]}</p>";
    echo "<p>{$meia[$i]}</p>";
    echo "<p>{$cueca[$i]}</p>";
    $_SESSION['msg'] = "<p>Enviado com sucesso</p>";
    header('Location:criar_campanha2.php');
  }
} else {
  $_SESSION['msg'] = "<p>Faltou algum dado</p>";
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
        </div>
      </div>
      <?php
      echo $_SESSION['msg'];
      ?>
      <button class="btn-enviar" type="submit">
        <a id="enviar">Avançar</a>
      </button>
    </form>
  </main>
</body>

</html>