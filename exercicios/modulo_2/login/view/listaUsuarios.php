<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pagina Inicial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="paginainicial">Moobitech</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="paginainicial">Home</a></li>
      <li><a href="cadastrar">Cadastro De Usuarios</a></li>
      <li><a href="../login/sair">Deslogar</a>
      <li class="active"><a href="listar">Listar Usuarios</a>
      <li><a> Bem vindo : <?php echo $_SESSION['logado']." ,Logou as ".":".$_SESSION['time']; ?> </a></li>
</ul>
</div>
</nav>
<br>
<br>
<br>
<br>
<legend>Usuarios que podem logar</legend>
<?php  foreach ($aUsers as $key) {?>
     <?php if($key['administrador'] == true) { ?>
     <h1><?php echo "Nome :".$key['login']?> </h1>
     <h1><?php echo "Acesso admin :".$key['administrador']?> </h1>
<?php } }?>
</body>
</html>