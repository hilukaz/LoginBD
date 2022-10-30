<?php
    require_once("bd/variavel.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <link href="css/*">

  <title>Cadastro, login</title>
</head>

<body>
  <div class="container ">
    <div class="row">
      <div class="col">
        <nav class="navbar bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
              Sistema Web 2.0
            </a>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="consulta.php">Consultar</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <nav class="navbar bg-light">
          <div class="container-fluid">
            <a class="navbar-brand">Alteração do Dado</a>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col">&nbsp;</div>
    </div>
    <div class="row">
      <div class="col">
        <form class="row g-3" method="post" action="bd/variavel.php?funcao=cadastro" id="form" name="form">
          <div class="col-md-6">
            <label for="exampleFormControlTextarea1" class="form-label">Nome</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3" 
            type="text" name="txtNome" required id="txtNome"></textarea>
          </div>
          <div class="col-md-6">
            <label for="exampleFormControlTextarea1" class="form-label">Endereço</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3"
            type="text" name="txtEndereco" required id="txtEndereco"></textarea>
          </div>
          <div class="col-12">
            <label for="exampleFormControlTextarea1" class="form-label">Bairro</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3"
            type="text" name="txtBairro" required id="txtBairro"></textarea>
          </div>
          <div class="col-6">
            <label for="exampleFormControlTextarea1" class="form-label">Cep</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3"
            type="text" name="txtCep" required id="txtCep" placeholder="xxxxx-xxx"></textarea>
          </div>
          <div class="col-md-3">
            <label for="exampleFormControlTextarea1" class="form-label">Cidade</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3"
            type="text" name="txtCidade" required id="txtCidade"></textarea>
          </div>
          <div class="col-md-3">
            <label for="exampleFormControlTextarea1" class="form-label">Estado</label>
            <select class="form-select" aria-label="Default select example"
            name="txtEstado" required id="txtEstado">

              <option value="AC">AC</option>

              <option value="AL">AL</option>

              <option value="AP">AP</option>

              <option value="AM">AM</option>

              <option value="BA">BA</option>

              <option value="CE">CE</option>

              <option value="ES">ES</option>

              <option value="GO">GO</option>

              <option value="MA">MA</option>

              <option value="MT">MT</option>

              <option value="MS">MS</option>

              <option value="MG">MG</option>

              <option value="PA">PA</option>

              <option value="PR">PR</option>

              <option value="PE">PE</option>

              <option value="PI">PI</option>

              <option value="RJ">RJ</option>

              <option value="RN">RN</option>

              <option value="RS">RS</option>

              <option value="RO">RO</option>

              <option value="RR">RR</option>

              <option value="SC">SC</option>

              <option value="SP">SP</option>

              <option value="SE">SE</option>

              <option value="TO">TO</option>

              <option value="DF">DF</option>



            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
            type="email" name="txtEmail" required id="txtEmail">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Senha</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3"
            type="password" name="txtSenha" required id="txtSenha"></textarea>

          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-dark">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>