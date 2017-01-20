<form   method="post" id="formularioDependente">
 <label for="nome">Nome do Dependente *</label>
 <input type="text" class="form-control" maxlength="32" id="nomeDependente" placeholder="Digite o valor" name="nomeDependente" required=""
  value="<?php echo  !isset($aDependente) ? "" : $aDependente['nomeDependente']?>"	>
 <label for="data_de_nascimento">Data de nascimento</label>
 <input type="date" class="form-control" id="data_de_nascimento" name="data_de_nascimento" 
 value="<?php echo  !isset($aDependente) ? "":$aDependente['data_de_nascimento']?>" >
 <label for="cargo">Parentesco</label>
 <?php include_once("view/AuxiliaresHtml/comboFamilia.php");?>
 <input type="hidden" name="chave" value="<?php echo isset($aDependente['chave']) ?  $aDependente['chave'] : "" ?>">
 <div class="modal-footer">
  <button type="submit" onclick="<?php echo  !isset($aDependente) ? 'salvardependentes()' : 'updateDependentes()'?>" class="btn btn-success">
  <?php echo !isset($aDependente) ? "cadastrar" : "Atualizar" ?> 
  </button>
</div>
</form>
