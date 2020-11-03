<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lojas - Full Stack E-commerce</title>
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
      <h2>Nossas Lojas</h2>
    </header>
    <hr />

    <section class="lojas">
          <div class="loja_box">
              <h3>São Paulo</h3>
              <p>Av. Paulista, 2000</p>
              <p>10 &ordm; andar</p>
              <p>Jardins</p>
              <p>(11) 2222-2222</p>
          </div>
          <div class="loja_box">
            <h3>Rio de Janeiro</h3>
            <p>Av. Copacabana, 2300</p>
            <p>5 &ordm; andar</p>
            <p>Copacabana</p>
            <p>(21) 2121-3333</p>
          </div>
          <div class="loja_box">
            <h3>Floripa</h3>
            <p>Av. Beira Mar, 200</p>
            <p>1 &ordm; andar</p>
            <p>Beira Mar</p>
            <p>(48) 2222-0000</p>
          </div>
    </section>
    <section class="galeria">
      <img src="./img/img_lojas.png" alt="Fotos de São Paulo, Rio de Janeiro e Florianópolis">
    </section>

  </main>

    <br><br><br><br>
    <footer id="rodape">
      <p id="formas_pagamento"><b>Formas de pagamento</b></p>
      <img src="./img/Formasdepagamento.png" alt="Formas de pagamento" />
      <br><br><br><br>
      <p>&copy; 2020  Recode Pro · Projeto Prático CSS Básico · E-commerce by Gabi Vespoli</p>
    </footer>
    <script src="./js/script.js"></script>
  </body>
</html>
