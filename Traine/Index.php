<html>
<head>
    <title></title>
</head>
<body>
<?php
$data= date('j')-1;

if(date('w')!=6){
   $valor =  6 - date('w');
}else{
    $valor= date('w');
}
$sabado = date('j')+$valor;
$diferença = $sabado-$data;
echo "O dia é ".$data."<br>";
echo "O sabado é ".$sabado."<br>";
echo "A diferença falta ".$diferença. " para o";
?>

</body>
</html>


