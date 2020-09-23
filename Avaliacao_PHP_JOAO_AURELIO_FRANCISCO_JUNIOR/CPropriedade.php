<?php

final class CPropriedade extends Certidao
{

    private $nomeDaPropriedade;

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

    public function setNomePropriedade($propriedade)
    {
        $this->nomeDaPropriedade = $propriedade;
    }
    public function getNomePropriedade()
    {
        return $this->nomeDaPropriedade;
    }
    
}

?>