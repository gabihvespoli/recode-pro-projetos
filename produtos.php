<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "produtosepedidos";

  $conn = mysqli_connect($servername, $username, $password, $database);

  if (!$conn) {
    die("A conexão ao BD falhou: " . mysqli_connect_error());
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produtos - Full Stack E-commerce</title>
    <link rel="stylesheet" href="./css/estilo.css">
  </head>
  <body>
    <!-- Menu -->
    <?php include_once('menu.html');
?>
    <br><br><br><br>
    <br><br><br><br>

    <main>
    <header>
      <h2>Produtos</h2>
    </header>
    <hr />

          <section class="categorias">
            <h3>Categorias</h3>
            <br>
            <ul>
              <li onclick="exibir_todos()">Todos (12)</li>
              <li onclick="exibir_categoria('geladeira')">Geladeiras (2)</li>
              <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
              <li onclick="exibir_categoria('microondas')">Microondas (2)</li>
              <li onclick="exibir_categoria('lava-roupas')">Lavadora de roupas (1)</li>
              <li onclick="exibir_categoria('lava-loucas')">Lava Louças (1)</li>
              <li onclick="exibir_categoria('cafeteira')">Cafeteiras (1)</li>
              <li onclick="exibir_categoria('ar-condicionado')">Ar Condicionado (1)</li>
              <li onclick="exibir_categoria('filtro')">Filtro de água (1)</li>
              <li onclick="exibir_categoria('adega')">Adega (1)</li>
            </ul>
          </section>

        <section class="produtos">

        <?php

          $sql = "SELECT * from produtos";
          $result = $conn->query($sql);
        
          if($result->num_rows > 0) {
            while($rows = $result->fetch_assoc()){
        ?>

        <div class="box_produto" id="<?php echo $rows["nome"]; ?>" style="display: inline-block">
            <img src="<?php echo $rows["imagem"];?>" alt="Geladeira Eletrolux" onmouseenter="aumenta(this)" onmouseout="diminui(this)">
            <br>
            <p class="descricao"><?php echo utf8_encode($rows["descricao"]);?></p>
            <hr>
            <p class="preco_antigo">R$ <?php echo $rows["preco_antigo"];?></p><br>
            <p class=preco_atual>R$ <?php echo $rows["preco"];?></p><br>
        </div>

        <?php
              }
            } else {
              echo "Nenhum produto cadastrado!";
            }
        ?>

      </section>

    </main>

    <footer id="rodape">
      <p id="formas_pagamento"><b>Formas de pagamento</b></p>
      <img src="./img/Formasdepagamento.png" alt="Formas de pagamento" />
      <br><br><br><br>
      <p id="copyright">&copy; 2020  Recode Pro · Projeto Prático CSS Básico · E-commerce by Gabi Vespoli</p>
    </footer>
    <script src="./js/script.js"></script>
  </body>
</html>
