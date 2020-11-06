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
        <h1 class="display-4">Contato</h1>
        <p class="lead">Espaço para você entrar em contato conosco.</p>
      </div>
    </div>

    <!-- <main>
    <header>
      <h2>Contato</h2>
    </header>
    <hr /> -->

    <div class="container">
      <div class="container">
      <div class="row">
        <div class="col-6">
          <img width="70" src="img/Email.png" alt="Imagem de uma cartinha com @">
          <p>contato@ecommerce.com</p>
        </div>
        <div class="col-6">
          <img width="70" src="img/Whatsapp.png" alt="Imagem do logo do Whatsapp">
          <p>(11) 93333-3333</p>
        </div>
      </div>
      </div>

      <br><br><br>
      <form method="post" action="">
        <div class="form-group">
          <h3>Envie uma mensagem para nós !</h3>
          <br>
          <label for="exampleInputNome1">Nome</label>
          <input type="text" class="form-control" name="nome" placeholder="Nome">
          <!-- <input class="dados-pessoais" id="nome" name="nome" type="text" placeholder="Escreva seu nome" onclick="muda_borda(this)"/> -->
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail"><br>
          <!-- <input class="dados-pessoais" id="email" name="email" type="email" placeholder="Escreva seu e-mail" onclick="muda_borda(this)"/> -->
          <label for="exampleFormControlTextarea1">Mensagem:</label>
          <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
          <!-- <textarea id="msg" name="msg" placeholder="Digite sua mensagem" onclick="muda_borda(this)"></textarea> -->
        </div>
        <button type="submit" class="btn btn-secondary">Enviar</button>
      </form>
      </div>
    </div>

    <!-- <section class="contatos">
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
    </section> -->

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
              echo "Nenhuma mensagem ainda!";
            }
    ?>
    
    <!-- </main> -->
    <br><br>
    <!-- Rodapé -->
    <?php include_once('footer.html')
    ?>
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
