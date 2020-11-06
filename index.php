<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Full Stack E-commerce</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <!-- Menu -->
    <?php include_once('menu.html');
?>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Seja bem vindo(a)!</h1>
      <p class="lead">Aqui em nossa loja, <em>programadores tem desconto</em> nos produtos para a sua casa!</p>
    </div>
  </div>

  <div class="container d-flex justify-content-center align-items-center">
  <div class="row">
    <div class="col-sm foto">
      <img width="100%" height="100%" src="./img/img_bv.jpg" alt="Imagem ilustrando compras na era digital">
    </div>
    <div class="col-sm foto">
      <img width="100%" height="100%" src="./img/img_bv2.jpg" alt="Imagem ilustrando compras na era digital">
    </div>
    <div class="col-sm foto">
      <img width="100%" height="100%" src="./img/img_bv3.jpg" alt="Imagem ilustrando compras na era digital">
    </div>
  </div>
</div>

    <!-- <br><br><br><br> -->

    <!-- <main>
      <h2>Seja bem vindo(a)!</h2>

      <p>Aqui em nossa loja, <em>programadores tem desconto</em> nos produtos para a sua casa!</p>
      <br><br><br><br><br>
        <div class="foto">
          <img src="./img/img_bv.jpg" alt="Imagem ilustrando compras na era digital">
        </div>
    </main> -->

    <!-- Rodapé -->
    <?php include_once('footer.html')
    ?>

    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>