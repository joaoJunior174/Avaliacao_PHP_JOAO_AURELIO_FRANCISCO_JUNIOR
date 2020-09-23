<?php

final class CCasamento extends Certidao
{

    private $regimeDeBens;

    public function __construct($nrCertidao,$pessoasCertidao,$nmDeclarante,
                                $dataEmissao,$nmTabeliao,$nmCartorio)
    {
        $this->nrCertidao = $nrCertidao;
        $this->pessoasCertidao = $pessoasCertidao;
        $this->nmDeclarante = $nmDeclarante;
        $this->dataEmissao = $dataEmissao;
        $this->nmTabeliao = $nmTabeliao;
        $this->nmCartorio = $nmCartorio;
        Certidao::$TOTAL_CERTIDOES+=1;
    }

    public function setRegimeDeBens($regimeDeBens)
    {
        $this->regimeDeBens = $regimeDeBens;
    }
    public function getRegimeDeBens()
    {
        return $this->regimeDeBens;
    }
    
}

?>