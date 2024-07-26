<?php
    namespace php\modelo;

    class funcionario{
        private int $matricula;
        private string $nome;
        private float $salario;
        private string $cargo;
        private string $endereco;
        private string $telefone;


        //Construtor
        public function __construct(string $matricula, string $nome, float $salario, string $cargo, string $endereco, string $telefone){
            $this->matricula = $matricula;
            $this->nome = $nome;
            $this->salario = $salario;
            $this->cargo = $cargo;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
        }//fim do construtor


        //métodos get
        public function getMatricula():int{
            return $this->matricula;
        }

        public function getNome():string{
            return $this->nome;
        }

        public function getSalario():float{
            return $this->salario;
        }

        public function getCargo():string{
            return $this->cargo;
        }

        public function getEndereco():string{
            return $this->endereco;
        }

        public function getTelefone():string{
            return $this->telefone;
        }

        //métodos set
        public function setMatricula(int $matricula):void{
            $this->matricula = $matricula;
        }

        public function setNome(string $nome):void{
            $this->nome = $nome;
        }

        public function setSalario(float $salario):void{
            $this->salario = $salario;
        }

        public function setCargo(string $cargo):void{
            $this->cargo = $cargo;
        }

        public function setEndereco(string $endereco):void{
            $this->endereco = $endereco;
        }

        public function setTelefone(string $telefone):void{
            $this->telefone = $telefone;
        }
        
        public function imprimir():string{
            return "<br>Matrícula: ".$this->getMatricula().
                   "<br>Nome: ".$this->getNome().
                   "<br>Salário: ".$this->getSalario().
                   "<br>Cargo: ".$this->getCargo().
                   "<br>Endereço: ".$this->getEndereco().
                   "<br>Telefone: ".$this->getTelefone();
        }

    }

?>