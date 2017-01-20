<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Filiados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php  include_once('view/viewsHead/cssCabecalhos.php');?>
  <?php include_once('view/viewsHead/scriptCabecalhos.php');?>
</head>
<body>
<?php include_once('view/viewsHead/menuAdm.php');?>
<br>
<br>
 <div id="main" class="container-fluid">
  <h4 class="page-header">Cadastrar Filiado</h4>
  <!-- </button> -->
  <form method="POST" action="registrar">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome do Filiado *</label>
  	  	<input type="text" class="form-control" maxlength="32" id="nome" placeholder="Digite o valor" name="nomeFiliado" required="">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cpf">CPF do filiado</label>
  	  	<input type="text" class="form-control" id="cpf" placeholder="Digite o cpf" name="cpf" maxlength="14" minlength="14" 
        onkeypress="mascaraCPF()" required="">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="rg">RG Do Filiado</label>
  	  	<input type="text" class="form-control" id="rg" placeholder="Digite o rg" name="rg" maxlength="20" required="">
  	  </div>
	</div>
	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label for="data_de_nascimento">Data de nascimento</label>
  	  	<input type="text" class="form-control" id="data_de_nascimento" name="data_de_nascimento" onmouseout="Idade()"
               required="" />
  	  </div>
	  <div class="form-group col-md-1">
  	  	<label for="idade">Idade</label>
  	  	<input type="text" class="form-control" id="idade" placeholder="idade" name="idade" onload="Idade()"  readonly="">
  	  </div>
	  <div class="form-group col-md-2">
  	  	<label for="empresa">Empresa</label>
        <select class="form-control" name="empresa" id="empresa" required="">
        <option value="">----</option>
        <?php  foreach ($aEmpresas as $key) { ?>
           <option value="<?php echo $key['id_empresa'] ?>"><?php echo $key['nome']; ?></option>
        <?php }?>   
        </select>
  	  </div>     
	  <div class="form-group col-md-2">
  	  	<label for="situacao">Situação</label>
  	  	<select class="form-control" name="situacao" id="situacao">
         <option value="" >----</option>
        <?php foreach ($aSituacao as $key) { ?>
              <option value="<?php echo $key['id_situacao'] ?>"><?php echo $key['nome']; ?></option>
        <?php }?>
        </select>
  	  </div>
      <div class="form-group col-md-2">
        <label for="cargo">Cargo</label>
         <select class="form-control" name="cargo" id="cargo">  
         <option value="">----</option> 
        <?php foreach ($aCargos as $key) {?>
          <option value="<?php echo $key['id_cargo'] ?>"><?php echo $key['nome']; ?></option>  
         <?php }?>
         </select>
      </div>
      <div class="form-group col-md-1">
        <label for="fixo">Telefone Fixo</label>
        <input type="text" class="form-control" id="fixo" placeholder="fixo" name="fixo" onkeypress="Telfixo();" required="" maxlength="9" minlength="9"/>
      </div>
       <div class="form-group col-md-1">
        <label for="Movel">Telefone Movel</label>
        <input type="text" class="form-control" id="Movel" placeholder="Movel" name="Movel" onkeypress="TelMovel()"  maxlength="14" minlength="14" required="">
      </div>
	</div>	
	<hr/>	
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-success">Salvar</button>
		<a href="cadastrar" class="btn btn-danger">Cancelar</a>
	  </div>
	</div>
  </form>
 </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cadastro de Dependentes</h4>
        </div>
        <div class="modal-body">
        <form action="salvardependentes" method="post">
         <label for="nome">Nome do Dependente *</label>
         <input type="text" class="form-control" maxlength="32" id="nomeDependente" placeholder="Digite o valor" name="nomeDependente" required="">
          <label for="data_de_nascimento">Data de nascimento</label>
          <input type="date" class="form-control" id="data_de_nascimento" name="data_de_nascimento" >
          <label for="cargo">Parentesco</label>
         <select class="form-control" name="Parentesco" id="Parentesco">  
         <option value="tia">Tia</option> 
         <option value="mae">Mae</option> 
         <option value="pai">Pai</option> 
         <option value="tio">Tio</option> 
         <option value="avó">Avó</option>
         <option value="avô">Avô</option>
         <option value="irma">Irmã</option>
         <option value="irmao">Irmão</option> 
         </select>
         <div class="modal-footer">
          <button type="submit" class="btn btn-default">Cadastrar</button>
        </div>
         </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-xs-9" id='lista'>
<legend><h2>Lista de Dependentes</h2></legend>
<legend><b>Adicionar Novo dependente</b> <a data-toggle="modal" data-target="#myModal"><img src="../imagens/plus.png">
</a></legend>
<table class="table table-bordered">
  <tr bgcolor="white">
      <th><h2>Nome do Dependente</h2></th>
      <th><h2>Parentesco</h2></th>
      <th><h2>Remover Dependente</h2></th>
  </tr>
  <?php  foreach ($aDependentes as $key) { ?>
        <?php if(isset($key['nomeDependente'])) {?>
             <tr>
             <td><b><?php  echo  $key['nomeDependente']?></b></td>
             <td><b><?php  echo  $key['Parentesco']?></b></td>
             <td><a href="removerDependente/<?php echo $key['chave']?>" >
              <img src="../imagens/remove.png"></a></td> 
             <tr>   
 <?php } } ?>  
</body>
</html>