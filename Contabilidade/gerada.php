
<?php
?>
<!Doctype html>
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/site.css" rel="stylesheet" type="text/css">
    <script>
        $(document).ready(function(){
        $("button").mouseenter(function(){
            $("a").css("color","white");
         }).mouseleave(function(){
            $("a").css("color","black")
        });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("body").mouseenter(function(){
              if($("td").val()==""){
                  $("td").css("color","red");
              }
          }).mouseleave(function(){
            $("td").css("color","black");
          });
        });
    </script>

</head>
<body id="corpo2">
<div class="col-md-6">
    <h1 id="Titulo">Tabela Financeira</h1>
<table class="table table-bordered" id="tabela" >
    <tr>
        <th id="topo">Ativos</th>
        <th id="topo">Passivos</th>
</tr>
    <?php
    for($i=0;$i<count($_POST);$i++){
        if(isset($_POST['ativo'.$i])){
        if($_POST['ativo'.$i] == "Ativo") {
            $nome = $_POST['nome' . $i];
            $preco = $_POST['preco' . $i];
            echo "
             <tr>
               <td>
               $nome R$$preco,00
            </td>
            <th></th>
            </tr>";
                }
        }
         else if(isset($_POST['passivo'.$i])){
             if($_POST['passivo'.$i]=='Passivo'){
                 $nome = $_POST['nome' . $i];
                 $preco = $_POST['preco' . $i];
                 echo "
             <tr>
                <th></th>
                <td>
                $nome  R$$preco,00
                </td>
            </tr>";
             }
         }

    }
    ?>
</table>
   <button class="btn btn-danger"><a href="index.php">Tela inicial</a></button>
</div>
</body>
</html>

