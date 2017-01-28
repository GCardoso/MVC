<?php if (isset($aEmpresa)) { ?> 
<?php foreach ($aEmpresa as $key) { ?>
<option value="<?php echo $key['id_empresa'] ?>"><?php echo $key['nome']; ?></option>
<?php } ?>
<?php } ?>