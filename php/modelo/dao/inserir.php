<?php
    namespace php\modelo\dao;

    require_once('../Endereco.php');

    use php\modelo\dao\Conexao;
    use php\modelo\Endereco;

    class Inserir{
        public Conexao $conexao;
        public string $tabela;
        public string $cpf;
        public string $nome;
        public string $telefone;
        public Endereco $endereco;
        public string $dtNascimento;
        public float $totalCompras;

        public function __construct(Conexao $conexao, string $tabela, string $cpf, string $nome, string $telefone, Endereco $endereco, string $dtNascimento, float $totalCompras){
            $this->conexao = $conexao;
            $this->tabela = $tabela;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->dtNascimento = $dtNascimento;
            $this->totalCompras = $totalCompras;
        }//fim do construtor

        function cadastrarCliente(string $cpf, string $nome, string $telefone, Endereco $endereco, string $dtNascimento, string $codEndereco){
            try{
                $conn = $this->conexao->conectar();
                $sql = "Insert Into Cliente (cpf, nome, telefone, endereco, dtNascimento, codEndereco)
                values('$cpf','$nome','$telefone','$endereco','$dtNascimento','$codEndereco')"
                $result = mysqli_connect($conn, $sql);
            }
        }
    }//fim da classe

?>