<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Filiados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php  include_once('view/viewsHead/cssCabecalhos.php');?>
  <?php  include_once('view/viewsHead/scriptCabecalhos.php');?>
</head>
<body>
<?php include_once('view/viewsHead/menuAdm.php');?>
<br>
<br>
<?php foreach ($aFiliado as $key) { ?>
 <div id="main" class="container-fluid">
  <h2 class="page-header">Editar Filiado</h4>
  <!-- </button> -->
  <form method="POST" action="<?php echo LOCAL."filiado/atualizar"?>">
  <input type="hidden" name="id_filiado" value="<?php echo $key['id_filiado']; ?>">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome do Filiado *</label>
  	  	<input type="text" class="form-control" maxlength="32" id="nome" placeholder="Digite o valor" value="<?php echo $key['nome']; ?>" name="nomeFiliado" required="">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cpf">CPF do filiado</label>
  	  	<input type="text" class="form-control" id="cpf" placeholder="Digite o cpf" name="cpf" value="<?php echo $key['cpf']; ?>" maxlength="14" minlength="14" 
        onkeypress="mascaraCPF()" required="">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="rg">RG Do Filiado</label>
  	  	<input type="text" class="form-control" id="rg" placeholder="Digite o rg" name="rg" maxlength="20" value="<?php echo $key['rg'] ?>" required="">
  	  </div>
	</div>
	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label for="data_de_nascimento">Data de nascimento</label>
  	  	<input type="date" class="form-control" id="data_de_nascimento" name="data_de_nascimento" value="<?php echo $key['data_de_nascimento']?>" onmouseout="Idade()" required="" >
  	  </div>
	  <div class="form-group col-md-1">
  	  	<label for="idade">Idade</label>
  	  	<input type="text" class="form-control" id="idade" placeholder="idade" name="idade" value="<?php  echo $key['idade']; ?>" onload="Idade()"  readonly="" required>
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
      <?php  foreach ($aTelefones as $key ) { ?>
      <div class="form-group col-md-1">
        <label for="fixo">Telefone Fixo</label>
        <input type="text" class="form-control" id="fixo" placeholder="fixo" value="<?php echo $key['telefone'] ?>" name="tel_fixo" onkeypress="Telfixo();" required="" maxlength="9" minlength="9"/>
      </div>
       <div class="form-group col-md-1">
        <label for="Movel">Telefone Movel</label>
        <input type="text" class="form-control" id="Movel" placeholder="Movel" value="<?php echo $key['telefone_fixo'] ?>" name="tel_movel" onkeypress="TelMovel()"  maxlength="14" minlength="14" required="">
      </div>
    <?php  }  ?> 
	</div>	
	<hr/>	
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-success">Atualizar</button>
		<a href="../gerenciarFiliados" class="btn btn-danger">Cancelar</a>
	  </div>
	</div>
 <?php } ?> 
  </form>
 </div>
 </body>
 </html>