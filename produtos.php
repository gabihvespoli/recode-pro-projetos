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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <!-- Menu -->
    <?php include_once('menu.html');
?>
    <!-- <br><br><br><br> -->
    <!-- <br><br><br><br> -->

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Produtos</h1>
        <p class="lead">Aqui você vê todas as novidades e os melhores produtos para você e para a sua casa.</p>
      </div>
    </div>

    <!-- <main>
    <header>
      <h2>Produtos</h2>
    </header>
    <hr /> -->


    <div class="container-fluid">
      <div class="row">
        <div class="col-2 ml-5 categorias">
          <h3>Categorias</h3><br>
          <ul class="list-group">
            <li onclick="exibir_todos()" class="list-group-item d-flex justify-content-between align-items-center">
              Todos
              <span class="badge badge-primary badge-pill">12</span>
            </li>
            <li onclick="exibir_categoria('geladeira')" class="list-group-item d-flex justify-content-between align-items-center">
              Geladeiras
              <span class="badge badge-primary badge-pill">2</span>
            <li onclick="exibir_categoria('fogao')" class="list-group-item d-flex justify-content-between align-items-center">
              Fogões
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li onclick="exibir_categoria('microondas')" class="list-group-item d-flex justify-content-between align-items-center">
              Microondas
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li onclick="exibir_categoria('lava-roupas')" class="list-group-item d-flex justify-content-between align-items-center">
              Lavadora de roupas
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li onclick="exibir_categoria('lava-loucas')" class="list-group-item d-flex justify-content-between align-items-center">
              Lava Louças
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li onclick="exibir_categoria('cafeteira')" class="list-group-item d-flex justify-content-between align-items-center">
              Cafeteiras
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li onclick="exibir_categoria('ar-condicionado')" class="list-group-item d-flex justify-content-between align-items-center">
              Ar Condicionado
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li onclick="exibir_categoria('filtro')" class="list-group-item d-flex justify-content-between align-items-center">
              Filtro de água
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li onclick="exibir_categoria('adega')" class="list-group-item d-flex justify-content-between align-items-center">
              Adega
              <span class="badge badge-primary badge-pill">1</span>
            </li>
          </ul>
        </div>
        <div class="col-9">

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
            <p class="preco_antigo">R$ <?php echo $rows["preco_antigo"];?></p>
            <p class="preco_atual text-danger">R$ <?php echo $rows["preco"];?></p><br>
        </div>

        <?php
              }
            } else {
              echo "Nenhum produto cadastrado!";
            }
        ?>

        </section>
        </div>
      </div>
    </div>

          <!-- <section class="categorias">
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

      </section> -->

    <!-- </main> -->

    <!-- Rodapé -->
    <?php include_once('footer.html')
    ?>
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
