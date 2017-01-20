<form method="post" id="formularioCargo">
   	<label for="nome">Nome da Cargo *</label>
    <input type="text" class="form-control" id="nome" value="<?php echo  $aCargo['nome'];?>" name="nome"  required="" title="SOMENTE LETRAS">
    <input type="hidden" name="id_cargo" value="<?php echo $aCargo['id_cargo'];?>"/>
	<div class="modal-footer">
    <button class="btn btn-success" onclick="updateCargo()" type="submit">Atualizar</button>
    </label>
	</div>
</form>