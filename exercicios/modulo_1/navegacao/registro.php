
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src='js/jquery-2.2.4.js' ></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jsquery-easing/1.3/jquery.easing.min.js'></script>
<script src='js/jqBootstrapValidation.js '> </script>
</head>
<body>
<?php
echo $_POST['senha'];
if(isset($_POST['senha'])){
	if($_POST['senha']=="moobitech"){
		echo "senha igual a moobitech";
		session_start();
		$_SESSION['cpf']=$_POST['cpf'];
		$_SESSION['senha']=$_POST['senha'];
		$tempo= time()+2600;
		setcookie('logado',''.$tempo.'segundos',$tempo);
		header('location:http://localhost/modulo_1/navegacao/index.php');
	}else{

		      echo "<script>alert('Senha invalida');</script>";
	          header('location:http://localhost/exercicios/modulo_1/navegacao/curriculo.php');
	}
}

?>
</body>
</html>

