<?php

include_once('RelatorioFPDF.php');

class EmpresaFPDF extends  RelatorioFPDF {
		
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

    function abrirPDF($aListaEmpresa, $sTitulo = "Lista Empresas") {
        $this->sTitulo = $sTitulo;
        $this->setMargins(10, 10, 10);
        
        $aConfiguracao = array("titulo" => $this->sTitulo,
                         "image" => 'imagens/Company.jpg',
                         "TamanhoCell" => 50,
                         "posicao" => "C",
                         "ln" =>30,
                         "font" => "Times",
                         "size" => 20);

        parent::setConfiguracao($aConfiguracao); // Set configuração   Do Header   Do PDF    
        parent::AdicionarCor("Verde");
        $this->AddPage();// Iniciar o PDF
        $aMatrizFormatado = self::formatarDadosTabelaEmpresa($aListaEmpresa);
        $this->CreateTable($aMatrizFormatado['aCabecalho'],$aMatrizFormatado['aDados'] ); // Funçao responsavel por receber Os dados da Empresa e Seus Cabeçalhos.
        $this->Output(); // Finaliza PDF.
    }
    
    function formatarDadosTabela($aListaEmpresa) {
        $aHeader = ['Nome' => 30, "CPF"  => 40, "RG" => 40 ,"Nascimento" =>32]; 
        $aRetorno = [];
        foreach ($aListaEmpresa as $iChave => $aLinha) {
            $aRetorno[] = [
                  $aLinha[0],
                  $aLinha[1],
                  $aLinha[2],
                  $aLinha[3],
                  $aLinha[4]  
            ];
        }
        return ['aCabecalho' => $aHeader, 'aDados' => $aRetorno];
    }


    function formatarDadosTitleTable($aListaEmpresa) {
        $aRetorno = [];
        foreach ($aListaEmpresa as $key => $value) {
            $aRetorno[] = $value['nome'];
        }

        return $aRetorno;
    }

    function formatarDadosTabelaEmpresa($aListaEmpresa) {
        $aHeader = ['Numeração' => 50, "Nome"  => 80,"Qtd.Filiados" => 50]; 
        $aRetorno = [];
        foreach ($aListaEmpresa as $iChave => $aLinha) {
            $aRetorno[] = [
                  $aLinha[0],
                  $aLinha[1],
                  $aLinha[2],
            ];
        }
        return ['aCabecalho' => $aHeader, 'aDados' => $aRetorno];
    }



    function CreateTablePorEmpresa($aListaEmpresa,$sTitulo = "Listar Por Empresa" ,$aListaFiliados) {

        $this->sTitulo = $sTitulo;
        // $this->setMargins(10, 10, 10);
        
        $aConfiguracao = array("titulo" => $this->sTitulo,
                         "image" => 'imagens/Company.jpg',
                         "TamanhoCell" => 50,
                         "posicao" => "C",
                         "ln" =>30,
                         "font" => "Times",
                         "size" => 20);

        parent::setConfiguracao($aConfiguracao); // Set configuração   Do Header   Do PDF    
        $this->AddPage();// Iniciar o PDF
        parent::AdicionarCor("Verde");
        foreach ($aListaEmpresa as $aEmpresa) {
            $aFiliados = [];
            foreach ($aListaFiliados as $aLinha) {  
                if ($aEmpresa['id_empresa'] == $aLinha['id_empresa']) {
                    $aFiliados[] = $aLinha;
                }
            }
            $aMatrizFormatado = self::formatarDadosTabela($aFiliados);
            $this->CreateTable($aMatrizFormatado['aCabecalho'],$aMatrizFormatado['aDados'], $aEmpresa['nome']); 
            $this->ln(15);
        }
        $this->Output(); // Finaliza PDF.
    }
 }   