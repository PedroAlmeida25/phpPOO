<?php
    namespace php\modelo; //Definir o local do projeto

    require_once('Pessoa.php');
    require_once('funcionario.php');
    require_once('cliente.php');
    require_once('dao/conexao.php');

    use php\modelo\dao\Conexao;//Direcionar o arquivo

    $conexao = new Conexao();
    $conexao->conectar();


    $pessoa1 = new Pessoa("1213142124235", "Pedro", "11987452365", "Rua João");
    $pessoa2 = new Pessoa("1213198216521", "José", "119874963254", "Rua Maria");

    $funcionario1 = new Funcionario(123, "João", 3500, "Desenvolvedor Junior", "Rua Vergueiro", "11963259874");

    $cliente1 = new Cliente("1236547985", "Diego", "1196322569", "Rua José", "23/06/2004");


    echo $pessoa1->imprimir();
    echo "<br>";
    echo $funcionario1->imprimir();
    echo "<br>";
    echo $cliente1->imprimir();



?>