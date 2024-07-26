<?php
    namespace php\modelo; //Definir o local do projeto

    require_once('Pessoa.php');

    $pessoa1 = new Pessoa("1213142124235", "Pedro", "11987452365", "Rua João");
    $pessoa2 = new Pessoa("1213198216521", "José", "119874963254", "Rua Pussy");


    echo $pessoa1->imprimir();
    echo $pessoa2->imprimir();


?>