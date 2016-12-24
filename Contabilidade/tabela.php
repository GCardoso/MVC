<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/site.css" rel="stylesheet" type="text/css">
    <script>
        $(document).ready(function(){
            $("#exibidor").click(function(){
                $("#tabela").slideToggle("slow");
                $("#exibidor").hide();
                $("#ocultar").show();
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#ocultar").click(function(){
                $("#tabela").slideToggle("slow");
                $("#ocultar").hide();
                $("#exibidor").show();
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#Titulo").click(function(){
                $("#Titulo").css("color","yellow");
            }).mouseleave(function(){
                $("#Titulo").css("color","black");
            });
        });
    </script>


</head>
<body id="corpo2">
<h1 id="Titulo">Tabela De Inserção de Dados</h1>
<form method="post" id="dados"  class="col-md-6" action="gerada.php">
    <table class="table table-bordered" style="display: none" id="tabela">
        <tr>
        <td id="topo">Nome</td>
        <td id="topo" >Ativo ou Passivo</td>
        <td id="topo" >Valor</td>
        </tr>
        <?php
        if(isset($_POST['numero'])){

        $valor= $_POST['numero'];
        for ($i=0;$i<$valor;$i++){
            $nome="nome".$i;
            $Ativo="ativo".$i ;
            $passivo="passivo".$i;
            $preco="preco".$i;
           echo "
           <tr>
        <td><input type='text' placeholder='nome' name=$nome  id='nome' required='required' ></td>
        <td> Ativo<input type='checkbox' value='Ativo' name=$Ativo id='ativo' > 
             Passivo<input type='checkbox' value='Passivo' name=$passivo id='passivo' > 
         </td>
        <td><input type='text' placeholder='valor' name=$preco id='preco' required='required'></td>
        </tr>
           ";
        }
        }
        ?>
    </table>
    <input  class="btn btn-danger" type="submit" value="inserir" name="inserir" id="inserir" >
    <input  class="btn btn-danger" type="submit" value="Exibir Tabela" name="inserir" id="exibidor" >
    <input  class="btn btn-danger" type="submit" value="Ocultar" name="ocultar" id="ocultar" style="display: none" >
</form>

</body>


