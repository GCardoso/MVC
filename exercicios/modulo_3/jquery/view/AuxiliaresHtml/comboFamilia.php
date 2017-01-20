 <select class="form-control" name="Parentesco" id="Parentesco">  
 <option value="<?php echo Constantes::TIA ?>"  <?php  if(isset($aDependente)) { echo $aDependente['Parentesco'] ==  Constantes::TIA ? 'selected' : "";}?> > Tia </option> 
 <option value="<?php echo Constantes::MAE ?>" <?php  if(isset($aDependente)) { echo $aDependente['Parentesco'] ==  Constantes::MAE ? 'selected' : "";}?> > Mae </option> 
 <option value="<?php echo Constantes::PAI?>"  <?php  if(isset($aDependente)) { echo $aDependente['Parentesco'] ==  Constantes::PAI ? 'selected' : "";}?> > Pai</option> 
 <option value="<?php echo Constantes::TIO?>" <?php  if(isset($aDependente)) { echo $aDependente['Parentesco'] ==  Constantes::TIO ? 'selected' : "";}?> > Tio</option> 
 <option value="<?php echo Constantes::AVO?>" <?php  if(isset($aDependente)) { echo $aDependente['Parentesco'] ==  Constantes::AVO ? 'selected' : "";}?> > Avó</option>
 <option value="<?php echo Constantes::AVOO?>" <?php  if(isset($aDependente)) { echo $aDependente['Parentesco'] ==  Constantes::AVOO ? 'selected' : "";}?>> Avô</option>
 <option value="<?php echo Constantes::IRMA?>" <?php  if(isset($aDependente)) { echo $aDependente['Parentesco'] ==  Constantes::IRMA ? 'selected' : "";}?> > Irmã</option>
 <option value="<?php echo Constantes::IRMAO?>" <?php  if(isset($aDependente)) { echo $aDependente['Parentesco'] ==  Constantes::IRMAO ? 'selected' : "";}?>> Irmão</option>
 </select> 
