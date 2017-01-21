<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Filiados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php  include_once('view/viewsHead/cssCabecalhos.php');?>
  <?php include_once('view/viewsHead/scriptCabecalhos.php');?>
   <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/confirm.js"?>"></script>
   <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/Filiado.js"?>"></script>
   <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/Empresa.js"?>"></script>
   <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/Situacao.js"?>"></script>
   <script type="text/javascript" src="<?php echo LOCAL."public/assets/bootstrap/js/Cargo.js"?>"></script>
</head>
<body onload="mensagem()">
<?php include_once('view/viewsHead/menuAdm.php');?>
<br>
<br>
<div class="btn-group-vertical" role="group" aria-label="...">
  <button title="Dados pessoais" type="button" class="btn btn-default" id="btn-filiado" ><img src="<?php echo LOCAL."imagens/DadosPessoais.png"?>"></button>
  <button  title="Dependentes" type="button" class="btn btn-default" id="btn-dependente" ><img  src="<?php echo LOCAL."imagens/Dependentes.png"?>"/button>
</div>
<div class="Informativo"></div>
 <div id="main" class="container-fluid" style="display:none">
  <h2 class="page-header">Cadastrar Filiado</h4>
  <!-- </button> -->
  <form method="POST" action="registrar" >
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome do Filiado *</label>
  	  	<input type="text" class="form-control" maxlength="32" id="nome" placeholder="Digite o valor" name="nomeFiliado" required="">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cpf">CPF do filiado</label>
  	  	<input type="text" class="form-control" id="cpf" placeholder="Digite o cpf" name="cpf" maxlength="14" minlength="14"  required="">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="rg">RG Do Filiado</label>
  	  	<input type="text" class="form-control" id="rg" placeholder="Digite o rg" name="rg" maxlength="20" required="">
  	  </div>
	</div>
	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label for="data_de_nascimento">Data de nascimento</label>
  	  	<input type="date" class="form-control" id="data_de_nascimento" name="data_de_nascimento" onmouseout="Idade()"  required=""  />
  	  </div>
	  <div class="form-group col-md-1">
  	  	<label for="idade">Idade</label>
  	  	<input type="text" class="form-control" id="idade" placeholder="idade" name="idade"  onload="Idade()" readonly="" />
  	  </div>
	  <div class="form-group col-md-2">
  	  	<label for="empresa2">Empresa  <a href="#"  id="addComboEmpresa" onclick="CadastrarEmpresa()" ><img src="<?php echo LOCAL."imagens/addCombo.png"?>"></a> </label>
        <select class="form-control" name="empresa" id="empresaSelect" required="">
        <option value="">----</option>
        <?php  foreach ($aEmpresas as $key) { ?>
           <option value="<?php echo $key['id_empresa'] ?>"><?php echo $key['nome']; ?></option>
        <?php }?>   
        </select>
  	  </div>     
	  <div class="form-group col-md-2">
  	  	<label for="situacao">Situação <a href="#" id="addComboSituacao" onclick="cadastrarSituacao()" > <img src="<?php echo LOCAL."imagens/addCombo.png"?>"></a></label>
  	  	<select class="form-control" name="situacao" id="situacao">
         <option value="" >----</option>
        <?php foreach ($aSituacao as $key) { ?>
              <option value="<?php echo $key['id_situacao'] ?>"><?php echo $key['nome']; ?></option>
        <?php }?>
        </select>
  	  </div>
      <div class="form-group col-md-2">
        <label for="cargo">Cargo  <a hre="#" id="addComboCargo" onclick="cadastrarCargo()" > <img src="<?php echo LOCAL."imagens/addCombo.png"?>"></a> </label>
         <select class="form-control" name="cargo" id="cargo">  
         <option value="">----</option> 
        <?php foreach ($aCargos as $key) {?>
          <option value="<?php echo $key['id_cargo'] ?>"><?php echo $key['nome']; ?></option>  
         <?php }?>
         </select>
      </div>
      <div class="form-group col-md-1">
        <label for="fixo">Telefone Fixo</label>
        <input type="text" class="form-control" id="fixo" placeholder="fixo" name="fixo" required="" maxlength="9" minlength="9"/>
      </div>
       <div class="form-group col-md-1">
        <label for="Movel">Telefone Movel</label>
        <input type="text" class="form-control" id="Movel" placeholder="Movel" name="Movel"  maxlength="14" minlength="14" required="">
      </div>
	</div>	
	<hr/>	
	<div class="row">
	  <div class="col-md-12">
	  	<button  type="submit"  class="btn btn-success" id="validadorCampos">Salvar</button>
		<a href="cadastrar" class="btn btn-danger">Cancelar</a>
	  </div>
	</div>
  </form>
 </div>
</div> 
<div class="col-xs-12" id='dependente' style="display: none">
<legend><h2>Lista de Dependentes</h2></legend>
<legend><b>Adicionar Novo dependente</b> <a  href="#" onclick="cadastrarDependente()"><img src="../imagens/plus.png">
</a> </legend>
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
             <td><a href="removerDependente/<?php echo $key['chave']?>" id="removelink" value="<?php echo $key['chave']?>" >
              <img src="../imagens/remove.png"></a>
              <a  href="#" data-id="<?php echo $key['chave'];?>" onclick="editDependent(this.name)" value="<?php echo $key['chave'];?>" name="<?php echo $key['chave'];?>">
              <img src="../imagens/edit.png"></a>
              </td>
             </tr>   
 <?php } } ?>
</table>
</body>
</html>
