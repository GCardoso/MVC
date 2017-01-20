

<form method="post" id="formularioSituacao">
   	<label for="nome">Nome da Situação *</label>
    <input type="text" class="form-control" id="nome" value="<?php echo  $aSituacao['nome'];?>" name="nome"  required=""
    pattern="[a-zA-Z]+" title="SOMENTE LETRAS">
    <input type="hidden" name="id_situacao" value="<?php echo $aSituacao['id_situacao'];?>"/>
	<div class="modal-footer">
    <button class="btn btn-success" onclick="updateSituacao()" type="submit">Atualizar</button>
    </label>
	</div>
</form>