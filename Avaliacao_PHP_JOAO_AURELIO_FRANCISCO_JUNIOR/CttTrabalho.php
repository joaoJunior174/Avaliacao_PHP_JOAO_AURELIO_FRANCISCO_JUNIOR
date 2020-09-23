<?php

final class CttTrabalho extends Contrato
{
    // a ideia de colocar empregado e empregando, mesmo com o array de pessoas envolvidas
    // é de poder identificar quem é o que
    //embora podesse ter uma especialização para cada tipo Pessoa (Empregado,Comprador
    //Empregando,Falecido) e etc...
    
    private $empregado;
    private $empregador;
    private $valorSalario;
    private $nrContaCorrente;

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

    public function setEmpregado($empregado)
    {
        $this->empregado = $empregado;
    }
    public function getEmpregado()
    {
        return $this->empregado;
    }
    public function setEmpregador($empregador)
    {
        $this->empregador = $empregador;
    }
    public function getEmpregador()
    {
        return $this->empregador;
    }
    public function setValorSalario($valorSalario)
    {
        $this->valorSalario = $valorSalario;
    }
    public function getValorSalario()
    {
        return $this->valorSalario;
    }
    public function setNrContaCorrente($nrContaCorrente)
    {
        $this->nrContaCorrente = $nrContaCorrente;
    }
    public function getNrContaCorrente()
    {
        return $this->nrContaCorrente;
    }
   
}

?>