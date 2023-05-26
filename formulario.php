<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Fashion Reborn</title>
  </head>
  <body>
    <header id="topo">
      <div class="botao">
        <a href="formulario.php">Área do cliente</a>
      </div>
      <div id="menu">
        <div>
          <img src="imagens/Logo fashion reborn.png" />
        </div>
        <nav>
          <div class="barra">
            <form>
              <input type="search" name="search" placeholder="Pesquisar" />
              <input type="submit" value="Buscar" />
            </form>
          </div>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Roupas</a></li>
            <li><a href="">Informações</a></li>
            <li><a href="">Entrar</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <h1 id="titulo">Formulário de Compra</h1>
      <br />
      <form action="" method="POST">
        <fieldset>
          <label>
            Nome Completo:
            <input
              type="text"
              name="nomecompleto"
              placeholder="Digite seu nome completo"
            />
          </label>
        </fieldset>
        <br />
        <fieldset>
          <label>
            Email:
            <input
              type="email"
              name="email"
              placeholder="Entre com seu email"
            />
          </label>
        </fieldset>
        <br />
        <fieldset>
          <label
            >Senha (minímo 8 caractéres):
            <input type="password" name="senha" minlength="8" required />
          </label>
        </fieldset>
        <br />
        <fieldset>
          <label>
            Data de Nascimento:
            <input type="date" name="datadenascimento" />
          </label>
        </fieldset>
        <br />
        <fieldset>
          <label>
            CPF:
            <input type="text" name="cpf" placeholder="Digite seu CPF" />
          </label>
        </fieldset>
        <br />
        <fieldset>
          <label>
            Número de telefone:
            <input
              type="tel"
              name="telefone"
              placeholder="Digite seu número de telefone"
              maxlength="12"
            />
          </label>
        </fieldset>
        <br />
        <fieldset>
          <label>
            Valor da Compra:
            <input
              type="number"
              name="valor"
              step="1"
              min="5"
              max="100000"
              value="10"
            />
          </label>
        </fieldset>
        <fieldset>
          <label>
            Forma de pagamento:
            <select name="select">
              <option value="Pix">Pix</option>
              <option value="Boleto">Boleto</option>
              <option value="Cartao">Cartão</option>
            </select>
          </label>
        </fieldset>
        <br />
        <fieldset>
          <label>
            Mensagem:
            <br />
            <textarea name="mensagem" rows="15"> </textarea>
          </label>
        </fieldset>
        <br />

        <div id="envio">
          <button type="submit"><strong>Enviar</strong></button>
        </div>
      </form>
    </main>

    <footer class="footer">
      <div class="rodape1">
        <p style="font-family: sans-serif">
          ©Todos Direitos Reservados FashionReborn Ltda.
        </p>
        <img src="imagens/telefone.png" />
        <p>(77) 3441-2106</p>
      </div>
      <div class="rodape1">
        <img src="imagens/instagram.png" />
        <p>@fashion_reborn</p>
      </div>
      <div class="rodape1">
        <img src="imagens/facebook.png" />
        <p>FashionRebornRoupas</p>
      </div>
      <div class="rodape1">
        <img src="imagens/twiter.png" />
        <p>fashionReborn_roupas</p>
      </div>
      <div id="endereco">
        <p>Rua: Praça da Bandeira, 683, Centro,Malhada de Pedras-BA</p>
      </div>
    </footer>
  </body>
</html>
