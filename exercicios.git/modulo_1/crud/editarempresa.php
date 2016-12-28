<?php
include('../sessoes/sessao.php');
sessao::start();

$empresa = array('nome'=>$_POST['nome'],'email'=>$_POST['email'],
				 'cnpj'=>$_POST['cnpj'],'cep'=>$_POST['cep'],
				 'estado'=>$_POST['estado'],'cidade'=>$_POST['cidade'],
				 'bairro'=>$_POST['bairro'],'logradouro'=>$_POST['logradouro'],
				 'telefone'=>$_POST['telefone']);

sessao::setsessao($_POST['nome'],$empresa);
echo "<script>alert('Atualizado com sucesso');window.location='http://localhost/exercicios/modulo_1/crud/crud.php'</script>";

