function exibir_categoria(categoria) {
  let elementos = document.getElementsByClassName('box_produto');
    for(var i=0; i<elementos.length; i++){
      if (categoria == elementos[i].id) {
        elementos[i].style = "display:inline-block";
      } else {
        elementos[i].style = "display:none";
      }
  }
}

let exibir_todos = () => {
  let elementos = document.getElementsByClassName('box_produto');

    for(var i=0; i<elementos.length; i++) {
      elementos[i].style = "display: inline-block";
    }
}

let aumenta = (imagem) => {
    imagem.style.width = '240px';
}

let diminui = (imagem) => {
  imagem.style.width = '120px';
}

let muda_cor = (navbar) => {
  navbar.style.color = 'midnightblue';
}

let muda_borda = (form) => {
  form.style.borderColor = "skyblue";
}