<?php

require_once 'Documentavel.php';
require_once 'Contrato.php';
require_once 'Certidao.php';
require_once 'Cartorio.php';
require_once 'Pessoa.php';
require_once 'CCasamento.php';
require_once 'CObito.php';
require_once 'CNascimento.php';
require_once 'CPropriedade.php';
require_once 'CttCompraVenda.php';
require_once 'CttTrabalho.php';
require_once 'CttPrestacaoServico.php';

$p1 = new Pessoa("joao","aurelio","casado",4444);
$p2 = new Pessoa("ana","maria","casado",4444);
$p3 = new Pessoa("lucas","brandon","aline",4444);
$p4 = new Pessoa("aline","araujo","lucas brandon",4444);

 $cca = new CCasamento(1,$p1,$p2,"10/10/10","jose","dona benta");
 $cca->setTipo("Certidao");
 $cna = new CNascimento(1,$p1,$p2,"10/10/10","jose","YOLO");
 $cna->setTipo("Certidao de Nascimento");
 $co = new CObito(1,$p1,$p2,"10/10/10","jose","YOLO");
 $co->setTipo("Certidao de Obito");
$cttc = new CttCompraVenda(1,array($p1,$p3,$p4),$p2,"Trabalho","10/10/10","10/10/10","jose","YOLO");

//$cttc->setNomeComprador("Carlos");
//echo $cttc->getNomeComprador();

echo "Total de certidoes ".Certidao::$TOTAL_CERTIDOES."<br>";
echo "Total de contratos ".Contrato::$TOTAL_CONTRATO."<br>";
//$car = new Cartorio;
//$car->addDocumento($cttc);
//$car->mostrarDocumentos("Contrato");


?>