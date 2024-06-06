<?php

// INCLUI O ARQUIVO QUE CONTÉM A CLASSE CONEXAO//
require_once '../controller/conexao.php';

 // CRIAÇÃO DA CLASSE PESSOA//
 class pessoa{

    // DECLARAÇÃO DOS ATRIBUTOS PRIVADOS DA CLASSE//
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;  // OBJETO DA CLASSE CONEXAO PARA ARMAZENAR A CONEXÃO COM O BANCO DE DADOS//


    // MÉTODOS GETTERS E SETTERS PARA CADA ATRIBUTO//
    // OS MÉTODOS GETTERS RETORNAM O VALOR DOS ATRIBUTOS//
    // OS MÉTODOS SETTERS ATRIBUEM VALORES AOS ATRIBUTOS//
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
    $this->nome = $nome;
    }
    
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
    $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
    $this->bairro = $bairro;
    }

    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
    $this->cep = $cep;
    }

    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }


    // CONSTRUTOR DA CALSSE PESSOA//
    public function __construct(){
        //CRIA UMA NOVA INSTÂNCIA DA CLASSE CONEXAO PARA ESTABELECER A CONEXÃO COM O BANCO DE DADOS//
        $this->conexao = new Conexao(); 
    }

    //MÉTODO PARA INSERIR UMA NOVA PESSOA NO BANCO DE DADOS//
    public function inserir(){
        //DECLARAÇÃO SQL PARA INSERIR UMA NOVA LINHA NA TABELA 'CLIENTE'//
        $sql = "INSERT INTO cliente (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
        //PREPARA A DECLARAÇÃO SQL//
        $stmt = $this->conexao->getConexao()->prepare($sql);
        //LIGA OS PARÂMETROS DA DECLARAÇÃO SQL COM OS ATRIBUTOS DA CLASSE//
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
        // EXECUTA A DECLARAÇÃO SQL//
        return $stmt->execute();

    }
}
?>
