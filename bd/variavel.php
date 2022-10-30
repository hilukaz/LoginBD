<?php
$root =realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/php/LoginBD4/bd/cadastro.php");//caminho
class cadastroController{//classe

    private $cadastro;//cria uma variável cadastro

    public function __construct(){//construtor, executa quando a classe for chamada

        $this->cadastro = new Cadastro();//instancia um objeto da classe Cadastro em cadastro.php
        if (isset($_GET['funcao']) && $_GET['funcao'] == "cadastro"){//se a variavel não existir e funcao == cadastro faça
            $this->incluir();//aplica o método incluir. $this pelo vato da classe ser privada
        }else if (isset($_GET['funcao']) && $_GET['funcao'] == "editar"){//se a variavel não existir e funcao == editar faça
            $this->editar($_GET['id']);
        }
        else if (isset($_GET['funcao']) && $_GET['funcao'] == "excluir"){//se a variavel não existir e funcao == excluir faça
            $this->excluir($_GET['id']);
        }
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['txtNome']);//pega a variável do post no formulário e joga dentro do objeto
        
        $this->cadastro->setEndereco($_POST['txtEndereco']);
        $this->cadastro->setBairro($_POST['txtBairro']);
        $this->cadastro->setcep($_POST['txtCep']);
        $this->cadastro->setCidade($_POST['txtCidade']);
        $this->cadastro->setEstado($_POST['txtEstado']);
        $this->cadastro->setEmail($_POST['txtEmail']);
        $this->cadastro->setSenha($_POST['txtSenha']);

        $result = $this->cadastro->incluir();//pega todas as variáveis do cadastro e joga no método incluir da classe cadastro.php
        if($result >= 1){//se $result = true
            echo "<script>alert('Registro incluído com sucesso!');document.location='../consulta.php'</script>";//location: transloca para a página de destino
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }
    public function listar($id){//0 criou o id
        return $result=$this->cadastro->listar($id);//o return serve para ele voltar pro mesmo local sem direcionar para outra página
    }

    private function editar($id){
        $this->cadastro->setId($id);

        $this->cadastro->setNome($_POST['txtNome']);//pega a variável do post no formulário e joga dentro do objeto
        
        $this->cadastro->setEndereco($_POST['txtEndereco']);
        $this->cadastro->setBairro($_POST['txtBairro']);
        $this->cadastro->setcep($_POST['txtCep']);
        $this->cadastro->setCidade($_POST['txtCidade']);
        $this->cadastro->setEstado($_POST['txtEstado']);
        $this->cadastro->setEmail($_POST['txtEmail']);
        $this->cadastro->setSenha($_POST['txtSenha']);

        $result = $this->cadastro->editar();//pega todas as variáveis do cadastro e joga no método incluir da classe cadastro.php
        if($result >= 1){
            echo "<script>alert('Registro alterado com sucesso!');document.location='../consulta.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }   
    public function excluir($id){
        $result = $this->cadastro->excluir($id);//cadastro é o nome do objeto do cadastro.php
        if($result >= 1){
            echo "<script>alert('Registro alterado com sucesso!');document.location='consulta.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }

}
new cadastroController();
?>