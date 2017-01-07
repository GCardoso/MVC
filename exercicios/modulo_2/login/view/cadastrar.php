<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="height:1500px">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="paginainicial">Moobitech</a>
    </div>
    <ul class="nav navbar-nav">
        <li ><a href="paginainicial">Home</a></li>
        <li class="active"><a href="cadastrar">Cadastro De Usuarios</a></li>
        <li><a href="../login/sair">Deslogar</a>
        <li><a href="listar">Listar Usuarios</a>
        <li><a> Bem vindo : <?php echo $_SESSION['logado']." ,Logou as ".":".$_SESSION['time']; ?> </a></li>
    </ul>
  </div>
</nav>
<div class="login-page">
    <div class="form">
        <form class="login-form" method="post" action="cadastro">
            <caption><h1>Cadastro</h1></caption>
            <input type="text" placeholder="Digite seu usuario"  name="nome" required />
            <input type="password" placeholder="senha" name="senha" required />
             User Admin <input type="radio" name="tipo" value="true"/>
            <input type="radio" name="tipo" value="false" checked/> User Comun
            <button>cadastro</button>
        </form>
    </div>
</div>
</body>
</html>