<?php 
    namespace php\modelo;

    class Endereco{
        private string $logradouro;
        private int $numero;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private string $uf;
        private string $pais;
        private string $cep;

        public function __construct(string $logradouro, int $numero, string $bairro, string $cidade, string $estado, string $uf, string $pais, string $cep,){
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->uf = $uf;
            $this->pais = $pais;
            $this->cep = $cep;
        }

        //métodos de acesso
        public function __get(string $nome){
            return $nome;
        }

        public function __set(string $nome, string $valor):void{
            $this->nome = $valor;
        }

        public function imprimir():string{
            return "<br>Logradouro: ".$this->logradouro.
                   "<br>Número: ".$this->numero.
                   "<br>Bairro: ".$this->bairro.
                   "<br>Cidade: ".$this->cidade.
                   "<br>Estado: ".$this->estado.
                   "<br>Uf: ".$this->uf.
                   "<br>Pais: ".$this->pais.
                   "<br>Cep: ".$this->cep;
        }

    }


?>