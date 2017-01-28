<?php
include_once(AVISOS);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Login Usuario</title>
      <?php include_once('view/viewsHead/menuLogin.php');?>
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<div class="w3-container">
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <img src="../imagens/boy.png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="logar" method="post">
        <div class="w3-section">
          <label><b>Usuario</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Insira seu nome" name="nome" required>
          <label><b>Senha</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Insira sua Senha" name="senha" required>
          <button class="w3-btn-block w3-green w3-section w3-padding" type="submit" name="login">Acessar</button>
        </div>
      </form>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
      </div>
    </div>
  </div>
</div>
</div>
<button id="btn" onclick="document.getElementById('id01').style.display='block'">Clique para Logar</button>
</body>
</html>

