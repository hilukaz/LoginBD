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
                  <a class="nav-link" href="index.php">Cadastrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="consulta.php">Consultar</a>
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
            <a class="navbar-brand" href="#">Lista de usuários</a>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col">&nbsp;</div>
    </div>
    <table class="table">
      <thead>
        <tr>
        <tbody id="TableData">
          <?php
          $controller=new cadastroController();
          $resultado=$controller->listar();

          for ($i=0; $i <count($resultado) ; $i++) { 
              # code...
          
          ?>

        <tr>
          
          <td scope="col"><?php echo $resultado[$i]['id']; ?></td>
          <td scope="col"><?php echo $resultado[$i]['txtNome']; ?></td>
          <td scope="col"><?php echo $resultado[$i]['txtEndereço']; ?></td>
          <td scope="col"><?php echo $resultado[$i]['txtBairro']; ?></td>
          <td scope="col"><?php echo $resultado[$i]['txtCep']; ?></td>
          <td scope="col"><?php echo $resultado[$i]['txtCidade']; ?></td>
          <td scope="col"><?php echo $resultado[$i]['txtEstado']; ?></td>
          <td scope="col"><?php echo $resultado[$i]['txtEmail']; ?></td>
          <td scope="col"><?php echo $resultado[$i]['txtSenha']; ?></td>
          <td scope="col">
          
            <button type="button" class="btn btn-dark" onclick="location.href='editar.php'" style="width 72px" >Editar</button>
            <button type="button" class="btn btn-dark">Excluir</button>
        </td>
          
        </tr>
        <?php
          }
        ?>
        <tr>
      </tbody>
    </table>
</body>

</html>