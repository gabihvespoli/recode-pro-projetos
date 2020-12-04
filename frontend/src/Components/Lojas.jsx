import React from "react";

function Lojas() {
  return (
    <>
      <div className="jumbotron jumbotron-fluid">
        <div className="container">
          <h1 className="display-4">Lojas</h1>
          <p className="lead">Conheça nossas lojas.</p>
        </div>
      </div>

      <div className="container">
        <div className="row">
          <div className="card-deck">
            <div className="card">
              <img
                className="card-img-top"
                src="./img/sp.png"
                alt="Imagem de Sampa"
              />
              <div className="card-body">
                <h2 className="card-title">São Paulo</h2>
                <p className="card-text">Av. Paulista, 2000</p>
                <p className="card-text">10 &ordm; andar</p>
                <p className="card-text">Jardins</p>
                <p className="card-text">(11) 2222-2222</p>
              </div>
              <div className="card-footer">
                <button
                  className="btn btn-info btn-block"
                  href="/Lojas"
                  disabled
                >
                  Entrar em contato &raquo;
                </button>
              </div>
            </div>
            <div className="card">
              <img
                className="card-img-top"
                src="./img/rj.png"
                alt="Imagem do Rio de Janeiro"
              />
              <div className="card-body">
                <h2 className="card-title">Rio de Janeiro</h2>
                <p className="card-text">Av. Copacabana, 2300</p>
                <p className="card-text">5 &ordm; andar</p>
                <p className="card-text">Copacabana</p>
                <p className="card-text">(21) 2121-3333</p>
              </div>
              <div className="card-footer">
                <button
                  className="btn btn-info btn-block"
                  href="/Lojas"
                  disabled
                >
                  Entrar em contato &raquo;
                </button>
              </div>
            </div>
            <div className="card">
              <img
                className="card-img-top"
                src="./img/flr.png"
                alt="Imagem de Floripa"
              />
              <div className="card-body">
                <h2 className="card-title">Floripa</h2>
                <p className="card-text">Av. Beira Mar, 200</p>
                <p className="card-text">1 &ordm; andar</p>
                <p className="card-text">Beira Mar</p>
                <p className="card-text">(48) 2222-0000</p>
              </div>
              <div className="card-footer">
                <button
                  className="btn btn-info btn-block"
                  href="/Lojas"
                  disabled
                >
                  Entrar em contato &raquo;
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default Lojas;
