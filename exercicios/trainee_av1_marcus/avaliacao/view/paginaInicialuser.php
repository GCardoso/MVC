<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pagina Inicial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/reset.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px" id="Telainicial">
<nav class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="userpage">Moobitech</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="userpage">Home</a></li>
        <li><a href="./../usuario/gerenciarUsuarios">Listar Usuarios</a></li>
        <li><a href="../empresa/cadastro">Cadastro Empresa</a></li>
        <li><a href="../empresa/gerirEmpresa">Listar Empresa</a></li>
        <li><a href="../situacao/cadastrar">Cadastrar Situação</a></li>
        <li><a href="../situacao/gerenciarSituacao">Listar Situações</a></li>
        <li><a href="../cargo/cadastrar">Cadastrar Cargos</a></li>
        <li><a href="../cargo/gerenciarcargo">Listar Cargos</a></li>
        <li><a href="../login/sair">Deslogar</a>
        <li><a> Bem vindo : <?php echo Sessao::getsessao('logado').", Logou as ".":". Sessao::getsessao('time');?> 
        </a></li>
    </ul>
    </div>
</nav>
</body>
</html>