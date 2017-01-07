<?php
include_once(AVISOS);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Login Usuario</title>
      <link rel="stylesheet" href="../css/style.css">
      <script src="../js/index.js"></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</head>
<body>
  <div class="login-page">
  <div class="form">
    <legend><h1>Moobitech<h1></legend>
    <form class="login-form" method="post" action="logar">
        <input type="text" placeholder="usuario"  name="nome" />
        <input type="password" placeholder="senha" name="senha" />
        <button>login</button>
    </form>
  </div>
</div>
</body>
</html>

