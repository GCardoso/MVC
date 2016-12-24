<!Doctype html>
<html>
<head>
    <title>Contabiidade Geral</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}"/>

    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/form.js')}}"></script>
    <script src="{{asset('assets/node_modules/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<form method="post" id="form1" href="{{route('tabela')}}">
    <h1>Quantidade Para Construção da Tabela</h1>
    <div>
    <input type="text"  id="quantidade" name="quantidade" required="required"/>
    </div><br>
    <div class="btn-group-sm">
    <input type="submit" value="Inserir" name="dados"  id="dados" class="btn btn-danger">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
</form>

<form class="form-inline col-md-5" style="display:none"  id="form">
    <table class="table table-bordered" >
        <div>
            <tr>
                <td>Nome</td>
                <td>Ativo Ou passivo</td>
                <td>Valor</td>
            </tr>
           @if(isset($_Post['quantidade']))
            @for($i=0 ; $i<=$_POST['quantidade'];$i++)
            <tr>
            <td><input type="text" placeholder="nome" id="nome"></td>
            <td>Ativo <input type="checkbox" value="Ativo" id="Ativo" name="Ativo">
                Passivo <input type="checkbox" value="passivo" id="Passivo" name="Passivo"></td>
            <td><input type="text" placeholder="Valores" id="valor"></td>
                <input type="hidden" value="1" name="contador">
            </tr>
           @endfor
        @endif
        </div>
</table>
</form>
</body>
</html>
