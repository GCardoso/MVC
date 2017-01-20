<ul>
    <li><a href="<?php echo LOCAL."usuario/userpage"?>">Home</a></li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Acesso</a>
        <div class="dropdown1-content">
            <a><?php echo  "Usuario:".Sessao::getsessao('logado')?></a>
            <a>Logou as : <?php echo Sessao::getsessao('time'); ?></a>
            <a href="<?php echo LOCAL."login/sair"?>">Deslogar</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Área De Usuario</a>
        <div class="dropdown1-content">
            <a href="<?php echo LOCAL."usuario/gerenciarUsuarios"?>">Gerir Usuarios</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Área De Empresa</a>
        <div class="dropdown1-content">
            <a href="<?php echo LOCAL."empresa/cadastro" ?>">Cadastrar Empresa</a>
            <a href="<?php echo LOCAL."empresa/gerirEmpresa"?>">Gerir Empresa</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Área De Situação</a>
        <div class="dropdown1-content">
            <a href="<?php echo LOCAL."situacao/cadastrar" ?>">Cadastrar Situação</a>
            <a href="<?php echo LOCAL."situacao/gerenciarSituacao"?>">Gerir Situações</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Área De Cargos</a>
        <div class="dropdown1-content">
            <a href="<?php echo LOCAL."cargo/cadastrar"?>">Cadastrar Cargos</a>
            <a href="<?php echo LOCAL."cargo/gerenciarCargo"?>">Gerir Cargos</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Área De Filiado</a>
        <div class="dropdown1-content">
            <a href="<?php echo LOCAL."filiado/cadastrar"?>">Cadastrar Filiado</a>
            <a href="<?php echo LOCAL."filiado/gerenciarFiliados"?>">Gerir Filiado</a>
        </div>
    </li>
</ul>
<?php 
  echo '<input type="hidden" id="controller" value="'.$_REQUEST['controller'].'"/>';
?>