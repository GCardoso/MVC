

<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src='js/jquery-2.2.4.js' ></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jsquery-easing/1.3/jquery.easing.min.js'></script>
<script src='js/jqBootstrapValidation.js '> </script>
</head>
<body>
<form method="GET" action="dados_pessoais.php">
 <fieldset>
   	<legend>Inserçao de Dados</legend>
   <label>
     Digite seu nome:
   	<input type="text" name="dado"/>
   </label>
   <label>
   	<input type="submit" value ="avançar">
   </label>
   </fieldset>
</form>
<?php  
  session_start();
  echo "<br> Sua sessão expirar em :".$_COOKIE['logado']."<br>";
 if(isset($_SESSION['cpf']) && isset($_SESSION['senha']) ){

    echo "Dados da pagina de Registro:<br>"."CPF:".$_SESSION['cpf']."<br>Senha:".$_SESSION['senha'];
    echo "<br>Hora:".date('H:i:s');
    $hora=date('H:i:s');
   if($hora > 0 || $hora <=12){
     echo "  Bom dia";
   }else if($hora >12  || $hora <= 18){
    echo "  Boa tarde";
   }else{
    echo "  Boa noite";
   }
   
}
?>

</body>
</html>