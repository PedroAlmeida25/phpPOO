<?php
    namespace php\modelo\dao;

    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','pooPHP');
                if($conn){
                    echo "<br> Conectado com sucesso!";
                    return $conn;
                }
                echo "<br> Algo deu errado";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do conectar
    }//fim da classe

    $conexao = new Conexao();
    $conexao->conectar();//Testar

?>