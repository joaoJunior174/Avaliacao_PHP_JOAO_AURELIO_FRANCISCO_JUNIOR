<?php

class Pessoa
{
    private $nmPessoa;
    private $sobrenome;
    private $estadoCivil;
    private $cpf;
    

    public function __construct($nmPessoa,$sobrenome,$estadoCivil,$cpf)
    {
        $this->nmPessoa = $nmPessoa;
        $this->sobrenome = $sobrenome;
        $this->$estadoCivil = $estadoCivil;
        $this->cpf = $cpf;
    }
    public function setNmPessoa($nmPessoa) 
    {
        $this->nmPessoa = $nmPessoa;
    }
    public function getNmPessoa() 
    {
        return $this->nmPessoa;
    }
    public function setSobrenome($sobrenome) 
    {
        $this->sobrenome = $sobrenome;
    }
    public function getSobrenome() 
    {
        return $this->sobrenome;
    }
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
}

?>