<?php 
    namespace php\modelo;

    require_once('Endereco.php');

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
        public function __get(string $nome){
            return $this->nome;
        }//fim do método getNome

        public function __set(string $campo, string $valor):void{
            $this->campo = $valor;
        }
        
        public function imprimir():string{
            return "<br>CPF: ".$this->cpf.
                    "<br>Nome: ".$this->nome.
                    "<br>Telefone: ".$this->telefone.
                    "<br>Endereço: ".$this->endereco;
        }

    }//fim da classe
?>