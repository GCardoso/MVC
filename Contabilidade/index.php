<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/site.css" rel="stylesheet" type="text/css">
</head>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("#formulario").show("slow");
                $("button").hide();
            });
        });
    </script>
</head>
<body id="Corpo">
<button class=" btn btn-success" id="Botao">Criar Planilha</button>
<form method="post" style="display:none " id="formulario" action="tabela.php">
    <h1>Insira A quantidade elementos da sua Planilha</h1><br>
    <input type="number" value="numero" name="numero" id="numero" required="required">
    <input type="submit" class="btn btn-danger" value="Gerar" name="gerar">
</form>
</body>
</html>

