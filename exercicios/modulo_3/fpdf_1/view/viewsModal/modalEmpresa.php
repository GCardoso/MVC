<form method="post" id="formularioEmpresa">
   	<label for="nome">Nome da Empresa *</label>
    <input type="text" class="form-control" id="empresa" value="<?php echo  isset($aEmpresa) ? $aEmpresa['nome'] : "" ?>" name="empresa"  required=""  title="SOMENTE LETRAS e NUMEROS">
    <input type="hidden" name="id_empresa" value="<?php echo  isset($aEmpresa) ? $aEmpresa['id_empresa'] : "" ?>"/>
	<div class="modal-footer">
    <button class="btn btn-success" onclick="<?php echo isset($aEmpresa) ? 'updateEmpresa()' : 'salvarEmpresa()' ?>"  id="btn-empresa"> 
	<?php echo  isset($aEmpresa) ? 'Atualizar' : 'cadastrar' ?></button>
    </label>
	</div>	
</form>
