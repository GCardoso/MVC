<?php
function linha($semana)
{
    echo "<tr>";
    for ($i = 0; $i <= 6; $i++) {
        if (isset($semana[$i])) {
            if($i==0 ){
                echo "<th bgcolor='red'>{$semana[$i]}</th>";
            }else if($i==6) {
                echo "<th>{$semana[$i]}</th>";
            }else{
                echo "<td>{$semana[$i]}</td>";
            }
        } else {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}

function calendario()
{
    $dia = 1;
    $semana = array();
    while ($dia <= 31) {
        array_push($semana, $dia);
        if (count($semana) == 7) {
            linha($semana);
            $semana = array();
        }
        $dia++;
    }
    linha($semana);
}

function gerarCalendario (){
   $meses = 1;
    while($meses <=12){
       echo "<table border=\"1\">
    <tr>
        <h1>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Quin</th>
            <th>Sex</th>
            <th>Sab</th>
        </h1>
    </tr>";
       calendario();
        $meses++;

     echo"</table>";
    }


}


?>



<html>
<head>
    <title>Calendario</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <?php gerarCalendario();?>
</body>
</html>
