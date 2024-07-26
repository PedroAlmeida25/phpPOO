<?php 
    namespace php\modelo;

    class pessoa{
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        
        //Método construtor
        public function __construct(string $cpf, string $nome, string $telefone, string $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco =$endereco;
        }//fim do método

        //métodos de acesso de modificação
        public function getCpf():string{
            return $this->cpf;
        }//fim do método getCpf

        public function getNome():string{
            return $this->nome;
        }//fim do método getNome

        public function getTelefone():string{
            return $this->telefone;
        }//fim do método getTelefone

        public function getEndereco():string{
            return $this->endereco;
        }//fim do método getEndereco

        public function setCpf(string $cpf):void{
            $this->cpf = $cpf;
        }//fim do método setCpf

        public function setNome(string $nome):void{
            $this->nome = $nome;
        }//fim do método setCpf

        public function setTelefone(string $telefone):void{
            $this->telefone = $telefone;
        }//fim do método setCpf

        public function setEndereco(string $endereco):void{
            $this->endereco = $endereco;
        }//fim do método setCpf

        public function imprimir():string{
            return "<br>CPF: ".$this->getCpf().
                    "<br>Nome: ".$this->getNome().
                    "<br>Telefone: ".$this->getTelefone().
                    "<br>Endereço: ".$this->getEndereco();
        }

    }//fim da classe
?>