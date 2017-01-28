<?php 

include_once('RelatorioFPDF.php');

class FiliadoFDPF extends RelatorioFPDF {

	 	protected $sTitulo;
        protected $sImage;
        protected $iTamanhoCell;
        protected $sPosicao;
        protected $iQuebralinha;    
        protected $sFontFamily;
        protected $iFontSize;
        protected $aSetFillCollor = [];
        protected $asetTextColor = [];
        protected $fundoColorido;
        protected $asetColorDraw = [];
        protected $LarguraColuna = [];



	function abrirPDF($aFiliado, $sTitulo = "Lista de Filiados") {
	
		$this->sTitulo = $sTitulo;
		$this->setMargins(3,10,8);
		$aConfiguracao = array("titulo" => $this->sTitulo,
                         "image" => 'imagens/group-of-men.png',
                         "TamanhoCell" => 80,
                         "posicao" => "C",
                         "ln" =>30,
                         "font" => "Times",
                         "size" => 20);
		parent::setConfiguracao($aConfiguracao);
		parent::adicionarCor("Verde");
		$aArrayFormatado  = self::formatarDadosFiliado($aFiliado);
		$this->AddPage();
		$this->CreateTable($aArrayFormatado['aCabecalhos'],$aArrayFormatado['aDados']);
		$this->Output();
	}


	function formatarDadosFiliado($aFiliado) {
		$aHeader = ['Nome'=>50 ,'CPF'=>40 ,"Rg" =>43,"Nascimento"=>32,"Qtd.Dependentes" =>40];
		$aRetorno = [];
		foreach ($aFiliado as $key => $value) {
			$aRetorno [] = [
						  $value[0],
						  $value[1],
						  $value[2],
						  $value[3],
						  $value[4]	
						];
		}
		return  ["aCabecalhos" =>$aHeader , "aDados" => $aRetorno];
	}


}

