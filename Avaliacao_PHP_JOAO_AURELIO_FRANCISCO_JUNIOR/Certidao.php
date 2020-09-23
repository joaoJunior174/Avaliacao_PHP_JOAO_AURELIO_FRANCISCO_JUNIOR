<?php

abstract class Certidao implements Documentavel
{
    protected $nrCertidao;
    protected $pessoasCertidao;
    protected $nmDeclarante;
    protected $dataEmissao;
    protected $nmTabeliao;
    protected $nmCartorio;
    protected $tipo;
    public static $TOTAL_CERTIDOES;

    public function retornarTipoDocumento(){
        return "Certidao";
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setNrCertidao($nrCertidao)
    {
        $this->nrCertidao = $nrCertidao;
    }
    public function getNrCertidao()
    {
        return $this->nrCertidao;
    }
    public function setPessoasCertidao(Pessoa $pessoasCertidao)
    {
        $this->pessoasCertidao[] = $pessoasCertidao;
    }
    public function getPessoasCertidao()
    {
        return $this->pessoasCertidao;
    }
    public function setNmDeclarante(Pessoa $nmDeclarante)
    {
        $this->nmDeclarante[] = $nmDeclarante;
    }
    public function getNmDeclarante()
    {
        return $this->nmDeclarante;
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