<form method="post" id="formularioCargo">
   	<label for="nome">Nome da Cargo *</label>
    <input type="text" class="form-control" id="nome" value="<?php echo  isset($aCargo['nome']) ? $aCargo['nome'] : "" ?>" name="nome"  required="" title="SOMENTE LETRAS">
    <input type="hidden" name="id_cargo" value="<?php echo isset($aCargo['id_cargo']) ? $aCargo['id_cargo'] : "" ?>"/>
	<div class="modal-footer">
    <button class="btn btn-success" onclick="<?php echo isset($aCargo) ? 
    			'updateCargo()' : 'salvarCargos()' ?>" type="submit" >
    			<?php echo isset($aCargo) ? "Atualizar" : "Cadastrar" ?>
    </button>
    </label>
	</div>
</form>