<!Doctype html>
<html>
<head>
    <title>Sistema de Gerenciamento de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}"/>

    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/form.js')}}"></script>
    <script src="{{asset('assets/node_modules/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
Gerenciemento de cadastro <br>
<form class="col-md-6 "  style="display:none"  id="formCadastro" >
    <div class="form-group ">
        <label for="nome">Usuario</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required="required">
    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" id="Confemail" placeholder="Password" required="required">
    </div>
    <div class="form-group">
        <label for="ConfPassword">Confirmar Password</label>
        <input type="password" class="form-control" id="Confpassword" placeholder="Confirmar Password" required="required">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Digite seu email" required="required">
    </div>
    <div class="form-group">
        <label for="Confemail">Confirmar Email</label>
        <input type="email" class="form-control" id="Confemail" placeholder="Digite novamente o email" required="required">
    </div>
    <div class="form-group">
        <input type="radio" id="Mulher" name="Opcao"  value="M" checked> Mulher <br>
        <input type="radio" id="Homen" name="Opcao" value="H">Homen
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<button type="submit" class="btn btn-danger" id="BtnExibir" >Efetuar cadastro</button>
</body>
</html>