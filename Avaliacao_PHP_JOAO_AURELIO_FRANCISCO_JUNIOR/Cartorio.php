<?php

class Cartorio
{
    private $contratos;
    private $certidoes;
    //aqui poderia ter sido mais generico, mas eu teria que ter uma flag em contratos para dizer o tipo
    //de qualquer forma, eu tentei deixar o mais genérico possível para imprimir mesmo
    //mas acho que o mais correto seria ter um atributo para guardar qualquer tipo de 
    //documento
    public function addDocumento(Documentavel $dc)
    {
        if($dc->retornarTipoDocumento() == "Contrato"){
            
            $this->contratos[] = $dc;
        }else{
            
            $this->certidoes[] = $dc;
        }
    }

    public function mostrarDocumentos($busca)
    {
        if($busca == "Contrato"){
            
            foreach($this->contratos as $contrato){
                echo "Numero do contrato ". $contrato->getNrContrato()."<br>";
                echo "Pessoas envolvidas ";
                print_r ($contrato->getPessoasEnvolvidas());
                echo "<br>Testemunhas ";
                print_r ($contrato->getTestemunhas());;
                echo "<br>Objeto do contrato ". $contrato->getObjContrato()."<br>";
                echo "Data de emissao ". $contrato->getDataEmissao()."<br>";

            }

        }else{

            foreach($this->certidoes as $certidao){
                echo "Numero da certidao ". $certidao->getNrCertidao()."<br>";
                echo "Pessoas da Certidao ";
                print_r ($certidao->getPessoasCertidao());
                echo "<br>Nome de declarantes ";
                print_r ($certidao->getNmDeclarante());;
                echo "<br>Tipo ". $certidao->getTipo()."<br>";
                
            }
        } 
    }
    
}

?>