<?php
$root =realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/php/LoginBD3/bd/cadastro.php");
class cadastroController{

    private $cadastro;

    public function __construct(){

        $this->cadastro = new Cadastro();
        if (isset($_GET['funcao']) && $_GET['funcao'] == "cadastro"){
            $this->incluir();
        }else if (isset($_GET['funcao']) && $_GET['funcao'] == "editar"){
            $this->editar($_GET['id']);
        }
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['txtNome']);//atribui o valo da variável ao post do index
        
        $this->cadastro->setEndereco($_POST['txtEndereco']);
        $this->cadastro->setBairro($_POST['txtBairro']);
        $this->cadastro->setcep($_POST['txtCep']);
        $this->cadastro->setCidade($_POST['txtCidade']);
        $this->cadastro->setEstado($_POST['txtEstado']);
        $this->cadastro->setEmail($_POST['txtEmail']);
        $this->cadastro->setSenha($_POST['txtSenha']);

        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }
    public function listar(){
        return $result=$this->cadastro->listar();
    }

    private function editar($id){
        
        $this->cadastro->setId($id);
        $this->cadastro->setNome($_POST['txtNome']);//atribui o valo da variável ao post do index
        
        $this->cadastro->setEndereco($_POST['txtEndereco']);
        $this->cadastro->setBairro($_POST['txtBairro']);
        $this->cadastro->setcep($_POST['txtCep']);
        $this->cadastro->setCidade($_POST['txtCidade']);
        $this->cadastro->setEstado($_POST['txtEstado']);
        $this->cadastro->setEmail($_POST['txtEmail']);
        $this->cadastro->setSenha($_POST['txtSenha']);

        $result = $this->cadastro->editar();
        if($result >= 1){
            echo "<script>alert('Registro alterado com sucesso!');document.location='../index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }

}
new cadastroController();
?>