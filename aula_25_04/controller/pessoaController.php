<?php
// INCLUI O ARQUIVO CONTENDO A DEFINIÇÃO DA CLASSE PESSOA//
require_once '../model/pessoa.php';

// CRIAÇÃO DE UMA CLASSE CONTROLLER//
class pessoaController{
    // DECLARAÇÃO DE UMA PROPRIEDADE PRIVADA $PESSOA, QUE SERÁ UM OBJETO DA CLASSE PESSOA//
    private $pessoa;
   
    public function __construct(){
        $this->pessoa = new Pessoa(); // INSTANCIA UM NOVO OBJETO DA CLASSE PESSOA E ATRIBUI À PROPRIEDADE $PESSOA//
        $this->inserir();  // CHAMA O MÉTODO INSERIR() ASSIM QUE UM OBJETO DA CLASSE PESSOACONTROLLER É CRIADO//
    }

    public function inserir(){
        // DEFINE OS VALORES DAS PROPRIEDADES DA PESSOA COM BASE NOS DADOS RECEBIDOS VIA POST
        $this-> pessoa->setNome($_POST['nome']);
        $this-> pessoa->setEndereco($_POST['endereco']);
        $this-> pessoa->setBairro($_POST['bairro']);
        $this-> pessoa->setCep($_POST['cep']);
        $this-> pessoa->setCidade($_POST['cidade']);
        $this-> pessoa->setEstado($_POST['estado']);
        $this-> pessoa->setTelefone($_POST['telefone']);
        $this-> pessoa->setCelular($_POST['celular']);     

        // CHAMA O MÉTODO INSERIR() DA CLASSE PESSOA PARA INSERIR OS DADOS DA PESSOA NO BANCO DE DADOS//
        $this->pessoa->inserir();
    }
}
// CRIA UMA NOVA INSTÂNCIA DA CLASSE PESSOACONTROLLER, O QUE ACIONARÁ A EXECUÇÃO DO CÓDIGO ACIMA//
new pessoaController
?>
