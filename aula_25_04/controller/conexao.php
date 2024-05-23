<?php

//CLASSE CONEXÃO CONECTADA COM BANCO DE DADOS DO LOCALHOST//
class Conexao{
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_25_04"; //NOME DO BANCO DE DADOS//
    private $conexao;

    //QUANDO A CLASSE FOR LIDA VAI SER EXECUTADA O QUE ESTÁ AQUI DENTRO//
    public function __construct() {
       $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

       if ($this->conexao->connect_error) {
        die("Falha na conexão: " . $this->conexao->connect_error); }

    }
    
    public function getConexao() {
        return $this->conexao;
    }
}

?>