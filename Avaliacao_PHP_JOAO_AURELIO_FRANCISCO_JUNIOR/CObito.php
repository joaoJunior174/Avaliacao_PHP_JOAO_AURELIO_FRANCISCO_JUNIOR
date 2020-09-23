<?php

final class CObito extends Certidao
{
    private $nomeFalecido;
    private $causaDaMorte;
    private $horarioDaMorte;
    private $diaDaMorte;
    private $medicoResposavel;

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

    public function setFalecido($nome)
    {
        $this->nomeFalecido = $nome;
    }
    public function getFalecido()
    {
        return $this->nomeFalecido;
    }
    public function setCausaDaMorte($causa)
    {
        $this->causaDaMorte = $causa;
    }
    public function getCausaDaMorte()
    {
        return $this->causaDaMorte;
    }
    public function setHorarioDaMorte($horario)
    {
        $this->horarioDaMorte = $horario;
    }
    public function getHorarioDaMorte()
    {
        return $this->horarioDaMorte;
    }
    public function setDiaDaMorte($dia)
    {
        $this->diaDaMorte = $dia;
    }
    public function getDiaDaMorte()
    {
        return $this->diaDaMorte;
    }
    public function setMedicoResponsavel($medico)
    {
        $this->medicoResposavel = $medico;
    }
    public function getMedicoResponsavel()
    {
        return $this->medicoResposavel;
    }
}

?>