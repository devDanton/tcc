<?php
session_start();
include "cabecalho.php";
include_once "conexao.php";
$camisa = "";
$calca = "";
$sapato = "";
$meia = "";
$cueca = "";
$status = false;

//print_r($_SESSION); Imprime dados salvos da sessão

if (isset($_POST["camisa"], $_POST["calca"], $_POST["sapato"], $_POST["meia"], $_POST["cueca"])) {
  $camisa = filter_input(INPUT_POST, "camisa");
  $calca = filter_input(INPUT_POST, "calca");
  $sapato = filter_input(INPUT_POST, "sapato");
  $meia = filter_input(INPUT_POST, "meia");
  $cueca = filter_input(INPUT_POST, "cueca");

  if (!$camisa || !$calca || !$sapato || !$meia || !$cueca) {
    $mensagem = "Dados inválidos!";
  } else {
    $nome = $_SESSION['nome'];
    $data_nascimento = $_SESSION['data_nascimento'];
    $telefone = $_SESSION['telefone'];
    $email = $_SESSION['email'];
    $endereco = $_SESSION['endereco'];
    $numero = $_SESSION['numero'];
    $bairro = $_SESSION['bairro'];
    $status = true;

    $result_usuario = "INSERT INTO doador (nome, data_nascimento, telefone, email, endereco, numero, bairro, tamanho_camisa, tamanho_calca, tamanho_sapato, tamanho_meia, tamanho_cueca) VALUES ('$nome', '$data_nascimento', '$telefone', '$email', '$endereco', '$numero', '$bairro', '$camisa','$calca','$sapato','$meia', '$cueca')";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);

    if (mysqli_insert_id($conexao)) {
      $_SESSION['msg'] = "<p style='color:green;'>Enviado com sucesso!</p>";
      header('Location: index.php');
    } else {
      $_SESSION['msg'] = "<span style='color:red; display: flex; left:10px;'>Falha no envio</span>";
      header('Location:formulario_doador2.php');
    }
  }
}
?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="index.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="formulario_doador.php">Voltar</a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="container">
    <form action="" method="POST">
      <h1>Medidas vestuário</h1>
      <div class="label">
        <span>Camisa</span>
        <label class="label_select">
          <select class="browser-default" name="camisa" required>
            <option value="" disabled selected>Nenhum</option>
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
    </form>
  </main>
</body>

</html>