import React from "react";

function Contato() {
  const [contato, setContato] = React.useState([]);
  const [render, setRender] = React.useState(false);
  const [msg, setMsg] = React.useState(false);

  React.useEffect(async () => {
    const url = "http://projetos/meteoro-eletro/backend/comentarios.php";
    const response = await fetch(url);
    setContato(await response.json());
  }, [render]);

  function enviarComentario(event) {
    event.preventDefault();
    let formData = new FormData(event.target);

    const url = "http://projetos/meteoro-eletro/backend/enviar-comentario.php";

    fetch(url, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((dados) => {
        setRender(!render);
        setMsg(dados);
        setTimeout(() => {
          setMsg(false);
        }, 3000);
      });
  }

  return (
    <>
      <div className="jumbotron jumbotron-fluid">
        <div className="container">
          <h1 className="display-4">Contato</h1>
          <p className="lead">Espaço para você entrar em contato conosco.</p>
        </div>
      </div>

      <div className="container">
        <div className="container">
          <div className="row">
            <div className="col-sm text-center">
              <img
                width="70"
                src="img/Email.png"
                alt="Imagem de uma cartinha com @"
              />
              <p className="lead mt-2">contato@meteoroeletro.com</p>
            </div>
            <div className="col-sm mb-5 text-center">
              <img
                width="70"
                src="img/Whatsapp.png"
                alt="Imagem do logo do Whatsapp"
              />
              <p className="lead mt-2">(11) 93333-3333</p>
            </div>
          </div>
        </div>

        <form onSubmit={enviarComentario}>
          <div className="form-group">
            <h3>Envie uma mensagem para nós !</h3>
            <br />
            <label for="nome">Nome</label>
            <input
              type="text"
              className="form-control mb-3"
              name="nome"
              id="nome"
              placeholder="Digite seu nome"
            />
            <label for="email">E-mail</label>
            <input
              type="email"
              className="form-control"
              name="email"
              id="email"
              placeholder="Digite seu e-mail"
            />
            <br />
            <label for="msg">Mensagem:</label>
            <textarea
              className="form-control"
              name="msg"
              id="msg"
              rows="3"
            ></textarea>
          </div>
          <button type="submit" className="btn btn-info">
            Enviar
          </button>
        </form>
        {msg && (
          <div className="alert alert-success mx-auto mt-5 w-100" role="alert">
            Cadastro efetuado com sucesso!
          </div>
        )}
        <h3 className="mt-5">Comentários</h3>
        <hr />
      </div>

      {contato.map((element) => {
        return (
          <div key={element.id} className="container">
            <div className="row">
              <div className="col">
                <div className="card border-secondary mx-auto mt-4">
                  <h5 className="card-header bg-transparent border-0">
                    {element.nome}
                  </h5>
                  <div className="card-body lead">{element.msg}</div>
                  <div className="card-footer border-0">
                    <small className="text-info">
                      Enviado em {element.data}
                    </small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        );
      })}
    </>
  );
}

export default Contato;
