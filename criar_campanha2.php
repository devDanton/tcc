<?php include "cabecalho.php" ?>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="tela_inicial.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="cadastro_donatario.php">Voltar</a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="container">
    <form>
      <h1>Criar campanha</h1>
      <h2>Lista de itens requisitados</h2>
      <table>
        <tr class="primeira-linha">
          <td>Camisa</td>
          <td>Calça</td>
          <td>Sapato</td>
          <td>Meia</td>
          <td>Cueca</td>
        </tr>
        <tr>
          <td>P</td>
          <td>34-36</td>
          <td>33-34</td>
          <td>P</td>
          <td>PP</td>
        </tr>
        <tr>
          <td>M</td>
          <td>38-40</td>
          <td>34-35</td>
          <td>PP</td>
          <td>P</td>
        </tr>
        <tr>
          <td>G</td>
          <td>40-42</td>
          <td>34-36</td>
          <td>M</td>
          <td>M</td>
        </tr>
        <tr>
          <td>EG</td>
          <td>42-48</td>
          <td>37-38</td>
          <td>G</td>
          <td>G</td>
        </tr>
        <tr>
          <td>EG</td>
          <td>50-54</td>
          <td>40-42</td>
          <td>EG</td>
          <td>GG</td>
        </tr>
        <tr>
          <td>GG</td>
          <td>56-58</td>
          <td>42-44</td>
          <td>GG</td>
          <td>EG</td>
        </tr>
      </table>
      <a class="btn-enviar" href="tela_inicial.php">
        <span id="enviar">Publicar</span>
      </a>
    </form>
  </main>
</body>

</html>