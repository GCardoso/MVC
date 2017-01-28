<?php 
include_once('pdf/fpdf.php');

abstract class RelatorioFPDF extends fpdf {
		
		protected $sTitulo;
		protected $sImage;
		protected $iTamanhoCell;
		protected $sPosicao;
		protected $iQuebralinha; 	
		protected $sFontFamily;
		protected $iFontSize;
		protected $aSetFillCollor = [];
		protected $asetTextColor = [];
		protected $asetColorDraw = [];
		protected $fundoColorido = false;
		protected $LarguraColuna = [];

	public function setConfiguracao($aConfiguracao = []) {
         $this->sTitulo = empty($aConfiguracao['titulo']) ? "" : $aConfiguracao['titulo'] ;
         $this->sImage = empty($aConfiguracao['image']) ? "" : $aConfiguracao['image'];
         $this->iTamanhoCell = empty($aConfiguracao['TamanhoCell']) ? "" : $aConfiguracao['TamanhoCell'];
         $this->sPosicao = empty($aConfiguracao['posicao']) ? "" : $aConfiguracao['posicao'];
         $this->iQuebralinha = empty($aConfiguracao['ln']) ? "" : $aConfiguracao['ln'];
         $this->sFontFamily = empty($aConfiguracao['font']) ? "" : $aConfiguracao['font'];
         $this->iFontSize = empty($aConfiguracao['size']) ? "" : $aConfiguracao['size'];
    }

	function  Header() {		
		if (!empty($this->sImage) && file_exists($this->sImage)) {
			$this->Image($this->sImage,5,5,30);
		} 
		$this->SetFont(!empty($this->sFontFamily) ? $this->sFontFamily : "Arial" ,"B",$this->iFontSize);
		$this->CellFitScale(50);
		$this->CellFitScale(100,10,$this->sTitulo,0,0,$this->sPosicao);
		$this->ln($this->iQuebralinha);
	}

	function Footer() {
		$this->SetY(-15);
		$this->SetFont('ARIAL','B',10);
		$this->CellFitScale(0,10,'Pagina '.$this->PageNo(),0,0,'R');
	}

    function adicionarCor($sCor) {
        switch ($sCor) {
            case 'Vermelho':
                 // Determina o  tamanho da coluna  de acordo com q quantidade de  colunas  ou seja 1:1  
	            $this->aSetFillCollor = ['cor1' => 255, "cor2" => 0 , "cor3" => 0 ,"corlinha1" => 224 ,"corlinha2" =>235 ,"corlinha3" => 255 ,"rgbColuna1" => 23 ,"rgbColuna2" => 62 ,"rgbColuna3" =>31]; // Diz cores  das linhas 
	            $this->asetTextColor = ["corTextoTitulo" => 255 ,"corTextoColuna" => 0 ,"corTextoBody" => 0] ; // Cor do texto
           		$this->asetColorDraw =["cor1" => 23 ,"cor2" => 62 , "cor3" => 31];
                break;
            case 'Verde':
                $this->aSetFillCollor = ['cor1' => 23, "cor2" => 62 , "cor3" => 31 ,"corlinha1" => 224 ,"corlinha2" =>235 ,"corlinha3" => 255 ,"rgbColuna1" => 23 ,"rgbColuna2" => 62 ,"rgbColuna3" =>31]; // Diz cores  das linhas 
                $this->asetTextColor = ["corTextoTitulo" => 255 ,"corTextoColuna" => 0 ,"corTextoBody" => 0]; // Cor do texto
                $this->asetColorDraw =["cor1" => 129 ,"cor2" => 0 , "cor3" => 0];
                break;
            default:
           		$this->LarguraColuna = [35,10,50]; // Determina o  tamanho da coluna  de acordo com q quantidade de  colunas  ou seja 1:1  
	            $this->aSetFillCollor = ['cor1' => 255, "cor2" => 0 , "cor3" => 0 ,"corlinha1" => 224 ,"corlinha2" =>235 ,"corlinha3" => 255]; // Diz cores  das linhas 
	            $this->asetTextColor = ["corTextoTitulo" => 255 ,"corTextoColuna" => 0 ,"corTextoBody" =>0]; // Cor do texto
           		$this->asetColorDraw =["cor1" => 23 ,"cor2" => 62 , "cor3" => 31];
                break;
        }
    }


    function CreateTable($aHeader,$aDados, $sTitulo = null) {
        $fundoColorido = false; 

        $aLarguras = [];

        $this->SetFont('Times',"i",15);

        $iLarguraTotal = 0;

        foreach ($aHeader as $sTexto => $iTamanho) {
           $aLarguras[] = $iTamanho;
           $iLarguraTotal += $iTamanho;
        }

        $sCorColuna = true;

        if (!empty($sTitulo)){
            $this->SetFillColor($this->aSetFillCollor['cor1'],$this->aSetFillCollor['cor2'],$this->aSetFillCollor['cor3']);
            $this->SetDrawColor($this->asetColorDraw['cor1'],$this->asetColorDraw['cor2'],$this->asetColorDraw['cor3']);
            $this->SetTextColor($this->asetTextColor['corTextoTitulo']);
            $this->CellFitScale($iLarguraTotal, 15 ,utf8_decode($sTitulo),1, 1,'C',true);
            $sCorColuna = false;
        }

        $this->SetFillColor($this->aSetFillCollor['cor1'],$this->aSetFillCollor['cor2'],$this->aSetFillCollor['cor3']);
        $this->SetTextColor( !empty($sTitulo) ? $this->asetTextColor['corTextoColuna'] : 255 );

        if (empty($aDados) && !empty($sTitulo)) {
            $this->CellFitScale($iLarguraTotal,6,utf8_decode("Nao ha registros"),1, 0, 'C', false);
            return;
        }

        foreach ($aHeader as $sTexto => $iTamanho) {
           $this->CellFitScale($iTamanho,6,utf8_decode($sTexto),1, 0, 'C', $sCorColuna);
        }
        $this->Ln(6);
        
        if (empty($aDados)) {
            $this->CellFitScale($iLarguraTotal,6,utf8_decode("Nao ha registros"),1, 0, 'C', false);
            return;
        }

       /* foreach ($aDados as $aLinha) {
            $y = $this->getY();
            $x = $this->getX();
            $h1 = $this->getHeightOfMultiCell($aLarguras[0],6,utf8_decode($aLinha[0]));
            $h2 = $this->getHeightOfMultiCell($aLarguras[1],6,utf8_decode($aLinha[1]));

            if ($h1 > $h2) {
                $iNumeroLinhas1 = $h1/6;
                $iNumeroLinhas2 = $h2/6;

                for ($i=0; $i <= $iNumeroLinhas1 - $iNumeroLinhas2; $i++) { 
                    if ($i % 2 == 0) {
                        $aLinha[1] .= "\n";
                    } else {
                        $aLinha[1] = "\n".$aLinha[1];
                    }
                }
            } else {
                $iNumeroLinhas1 = $h1/6;
                $iNumeroLinhas2 = $h2/6;

                for ($i=0; $i <= $iNumeroLinhas2 - $iNumeroLinhas1; $i++) { 
                    if ($i % 2 == 0) {
                        $aLinha[0] .= "\n";
                    } else {
                        $aLinha[0] = "\n".$aLinha[0];
                    }
                }
            }
            
            $this->MultiCell($aLarguras[0],6,utf8_decode($aLinha[0]),1, 'C', false);
            $this->setY($y);
            $this->setX($x + $aLarguras[0]);


            $y = $this->getY();
            $x = $this->getX();
            
            $this->MultiCell($aLarguras[1],6,utf8_decode($aLinha[1]),1, 'C', false);
            $this->setY($y);
            $this->setX($x + $aLarguras[1]);

            $h = max($h1, $h2);
            $this->CellFitScale($aLarguras[2],$h,utf8_decode($aLinha[2]),1, 0, 'C', false);

            $this->CellFitScale($aLarguras[3],$h,utf8_decode($aLinha[3]),1, 0, 'C', false);
          
            $this->CellFitScale($aLarguras[4],$h,utf8_decode($aLinha[3]),1, 0, 'C', false);

            $this->Ln($h);
         }

        return;*/

        foreach ($aDados as $aLinha) {
           foreach ($aLinha as $key => $sTexto) {
                if (empty($aLarguras[$key])) {
                    continue;
                }
                $this->SetTextColor($this->asetTextColor['corTextoBody']);
                $this->CellFitScale($aLarguras[$key],6,utf8_decode($sTexto),1, 0, 'C', false);
            }
            $this->Ln(6);
        }
    }
}