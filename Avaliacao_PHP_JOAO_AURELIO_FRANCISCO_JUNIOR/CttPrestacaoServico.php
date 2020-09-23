<?php

final class CttPrestacaoServico extends Contrato
{

    private $contratado;
    private $contratando;

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

    public function setContratado($contratado)
    {
        $this->contratado=$contratado;
    }
    public function getContratado()
    {
        return $this->contratado;
    }
    public function setContrantado($contratando)
    {
        $this->contratando=$contratando;
    }
    public function getContratando()
    {
        return $this->contratando;
    }
   
}

?>