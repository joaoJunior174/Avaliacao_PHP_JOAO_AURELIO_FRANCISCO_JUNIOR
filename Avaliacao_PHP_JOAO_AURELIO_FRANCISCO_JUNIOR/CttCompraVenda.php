<?php

final class CttCompraVenda extends Contrato
{

    private $nomeVendedor;
    private $nomeComprador;

    public function __construct($nrContrato,$pessoasEnvolvidas,$testemunhas,
                                $objContrato,$dataEmissao,$dataRegistro,
                                $nmTabeliao,$nmCartorio)
    {
        $this->nrContrato = $nrContrato;
        $this->pessoasEnvolvidas = $pessoasEnvolvidas;
        $this->testemunhas = $testemunhas;
        $this->objContrato = $objContrato;
        $this->dataEmissao = $dataEmissao;
        $this->dataRegistro = $dataRegistro;
        $this->nmTabeliao = $nmTabeliao;
        $this->nmCartorio = $nmCartorio;
        Contrato::$TOTAL_CONTRATO+=1;
    }
   
    public function setNomeVendedor($nomeVendedor)
    {
        $this->nomeVendedor = $nomeVendedor;
    }
    public function getNomeVendedor()
    {
        return $this->nomeVendedor;
    }
    public function setNomeComprador($nomeComprador)
    {
        $this->nomeComprador = $nomeComprador;
    }
    public function getNomeComprador()
    {
        return $this->nomeComprador;
    }
}

?>