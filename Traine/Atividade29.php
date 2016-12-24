<?php
/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 21/12/2016
 * Time: 21:42
 */
function Frase(){

    if(date('h:i:s') > 12 &&  date('h:i:s') <= 16){
        echo "boa tarde";
    }else if(date('h:i:s') < 12){
        echo "Manha";
    }else{
        echo'Noite';
    }
}


?>

<html>
<head>
    <title>Frase</title>
</head>
<body>


<?php
Frase();
?>
</body>
</html>
