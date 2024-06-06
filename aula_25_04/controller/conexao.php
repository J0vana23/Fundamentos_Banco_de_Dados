<?php

// CLASSE CONEXÃO CONECTADA COM BANCO DE DADOS DO LOCALHOST//
class Conexao{
    private $host = "localhost";  // ENDEREÇO DO SERVIDOR MYSQL (LOCALHOST)//
    private $usuario = "root";   // NOME DE USUÁRIO DO MYSQL//
    private $senha = ""; // SENHA DO MYSQL (POR ENQUANTO ESTA VAZIA)//
    private $banco = "exemplo_aula_25_04"; //NOME DO BANCO DE DADOS//
    private $conexao;  // VARIÁVEL PARA ARMAZENAR A CONEXÃO MYSQL//

    // QUANDO A CLASSE FOR LIDA VAI SER EXECUTADA O QUE ESTÁ AQUI DENTRO//
    public function __construct() {
      
        // CRIA UMA NOVA CONEXÃO MYSQL USANDO OS DADOS FORNECIDOS//
       $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

       // VERIFICAR SE HOUVER FALHA NA CONEXÃO//
       if ($this->conexao->connect_error) {
        // MENSAGEM QUE APARECERÁ SE HOUVER FALHA//
        die("Falha na conexão: " . $this->conexao->connect_error); }
    }
  
    // MÉTODO PARA OBTER A CONEXÃO COM O BANCO DE DADOS
    public function getConexao() {
        return $this->conexao;
    }
}

?>
