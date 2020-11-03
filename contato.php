<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "produtosepedidos";

  $conn = mysqli_connect($servername, $username, $password, $database);

  if (!$conn) {
    die("A conexão ao BD falhou: " . mysqli_connect_error());
  }

  if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO comentarios (nome, email, msg) VALUES ('$nome', '$email', '$msg')";
    $result = $conn->query($sql);
  } 
    ?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contato - Full Stack E-commerce</title>
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
      <h2>Contato</h2>
    </header>
    <hr />

    <section class="contatos">
          <div class="email">
              <img src="img/Email.png" alt="Imagem de uma cartinha com @">
              <p>contato@ecommerce.com</p>
          </div>
          <div class="whats">
              <img src="img/Whatsapp.png" alt="Imagem do logo do Whatsapp">
              <p>(11) 93333-3333</p>
          </div>
    </section>
    <br><br>
    <section class="mensagem">
      <h4>Envie uma mensagem para nós:</h4>
      <br>
      <form method="post" action="">
        <input class="dados-pessoais" id="nome" name="nome" type="text" placeholder="Escreva seu nome" onclick="muda_borda(this)"/>
        <br><br>
        <input class="dados-pessoais" id="email" name="email" type="email" placeholder="Escreva seu e-mail" onclick="muda_borda(this)"/>
        <br><br>
        <label>Deseja receber novidades do site?</label><br><br>
        <input type="radio" name="news"> Sim
        <input type="radio" name="news"> Não
        <br><br>
        <textarea id="msg" name="msg" placeholder="Digite sua mensagem" onclick="muda_borda(this)"></textarea>
        <br>
        <input class="buttom" type="submit" name="submit" value="Enviar">
      </form>
    </section>

    <?php
          $sql = "SELECT * from comentarios";
          $result = $conn->query($sql);
        
          if($result->num_rows > 0) {
            while($rows = $result->fetch_assoc()){
                echo "<br>";
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";
                echo "<hr>";
              }
            } else {
              echo "Nenhum produto cadastrado!";
            }
    ?>
    
    </main>
    <br><br>
    <footer id="rodape">
      <p id="formas_pagamento"><b>Formas de pagamento</b></p>
      <img src="./img/Formasdepagamento.png" alt="Formas de pagamento" />
      <br><br><br><br>
      <p>&copy; 2020  Recode Pro · Projeto Prático CSS Básico · E-commerce by Gabi Vespoli</p>
    </footer>
    <script src="./js/script.js"></script>
  </body>
</html>
