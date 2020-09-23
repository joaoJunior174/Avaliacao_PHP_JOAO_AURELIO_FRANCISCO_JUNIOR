<?php

abstract class Contrato implements Documentavel
{
    protected $nrContrato;
    protected $pessoasEnvolvidas;
    protected $testemunhas;
    protected $objContrato;
    protected $dataEmissao;
    protected $dataRegistro;
    protected $nmTabeliao;
    protected $nmCartorio;
    public static $TOTAL_CONTRATO;


    public function retornarTipoDocumento(){
        return "Contrato";
    }

    public function setNrContrato($nrContrato)
    {
        $this->nrContrato = $nrContrato;
    }
    public function getNrContrato()
    {
        return $this->nrContrato;
    }
    public function setPessoasEnvolvidas(Pessoa $pessoaEnvolvida)
    {
        $this->pessoasEnvolvidas[] = $pessoaEnvolvida;
    }
    public function getPessoasEnvolvidas()
    {
        return $this->pessoasEnvolvidas;
    }
    public function setTestemunhas(Pessoa $testemunha)
    {
        $this->testemunhas[] = $testemunha;
    }
    public function getTestemunhas()
    {
        return $this->testemunhas;
    }
    public function setObjContrato($objContrato)
    {
        $this->objContrato = $objContrato;
    }
    public function getObjContrato()
    {
        return $this->objContrato;
    }
    public function setDataRegistro($dataRegistro)
    {
        $this->dataRegistro = $dataRegistro;
    }
    public function getDataRegistro()
    {
        return $this->dataRegistro;
    }
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    }
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }
    public function setNmTabeliao($nmTabeliao)
    {
        $this->nmTabeliao = $nmTabeliao;
    }
    public function getNmTabeliao()
    {
        return $this->nmTabeliao;
    }
    public function setNmCartorio($nmCartorio)
    {
        $this->nmCartorio = $nmCartorio;
    }
    public function getNmCartorio()
    {
        return $this->nmCartorio;
    }
}

?>