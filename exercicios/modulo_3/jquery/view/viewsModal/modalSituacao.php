<form method="#" id="formularioSituacao">
   	<label for="nome">Nome da Situação *</label>
    <input type="text" class="form-control" id="nome" 
    value="<?php echo  isset($aSituacao['nome']) ?  $aSituacao['nome'] : '' ?>" name="nome"  required="" 
    pattern="[a-zA-Z]+" title="SOMENTE LETRAS">
    <input type="hidden" name="id_situacao" 
    value="<?php  echo isset($aSituacao['id_situacao']) ? $aSituacao['id_situacao'] : "" ?>"/>
	<div class="modal-footer">
    <button class="btn btn-success" onclick="<?php echo isset($aSituacao) ? 'updateSituacao()' : 'salvarSituacao()' ?>" type="submit"><?php echo isset($aSituacao) ? 'Atualizar' :'Cadastrar' ?></button>
    </label>
	</div>
</form>