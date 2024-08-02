<?php
    namespace php\modelo;

    class Cliente{
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $dataDeNascimento;

        public function __construct(string $cpf, string $nome, string $telefone, string $endereco, string $dataDeNascimento){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->dataDeNascimento = $dataDeNascimento;
        }

        public function getCpf():string{
            return $this->cpf;
        }

        public function getNome():string{
            return $this->nome;
        }

        public function getTelefone():string{
            return $this->telefone;
        }

        public function getEndereco():string{
            return $this->endereco;
        }

        public function getDataDeNascimento():string{
            return $this->dataDeNascimento;
        }

        public function setCpf(string $cpf):void{
            $this->cpf = $cpf;
        }

        public function setNome(string $nome):void{
            $this->nome = $nome;
        }

        public function settelefone(string $telefone):void{
            $this->telefone = $telefone;
        }

        public function setEndereco(string $endereco):void{
            $this->endereco = $endereco;
        }

        public function setDataDeNascimento(string $dataDeNascimento):void{
            $this->dataDeNascimento = $dataDeNascimento;
        }

        public function imprimir():string{
            return "<br>CPF: ".$this->getCpf().
                   "<br>Nome: ".$this->getNome().
                   "<br>Telefone: ".$this->getTelefone().
                   "<br>Endereço: ".$this->getEndereco().
                   "<br>Data de Nascimento: ".$this->getDataDeNascimento();
        }
    }
?>