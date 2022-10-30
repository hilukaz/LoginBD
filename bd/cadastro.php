<?php
require_once("banco.php");

class Cadastro extends Banco {//herança com o banco

    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $email;
    private $senha;
    private $id;

    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    public function setBairro($string){
        $this->bairro = $string;
    }
    public function setCep($string){
        $this->cep = $string;
    }
    public function setCidade($string){
        $this->cidade = $string;
    }
    public function setEstado($string){
        $this->estado = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    public function setSenha($string){
        $this->senha = $string;
    }

    //Metodos Get
    
    public function getNome(){
        return $this->nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }

    //id
    public function setId($string){
        $this->id = $string;
    }
    
    public function getId(){
        return $this->id;
    }

    public function incluir(){
        return $this->setAgendamentos($this->getNome(),$this->getEndereco(),$this->getBairro(),$this->getCep(),$this->getCidade(),$this->getEstado(),$this->getEmail(),$this->getSenha());
    //traça todas as variáveis transmitida na variavel.php e atribui na própria variável do código com o encapsulamento
    //retorna com o método e o parâmetro do setAgendamentos contido no código banco
    }

    public function listar($id){//passa o id. O id é muito importante para diferenciar um dado do outro, o único jeito.
        return $this ->getAgendamentos($id);//passa o id como parametro e se direciona pro banco
    }

    public function editar(){
        return $this->updateAgendamentos($this->getId(),$this->getNome(),$this->getEndereco(),$this->getBairro(),$this->getCep(),$this->getCidade(),$this->getEstado(),$this->getEmail(),$this->getSenha());
        //puxa o id também pois é necesário distinguir um dado do outro pra não acabar alterando o errado
    }

    public function excluir($id){
        return $this ->deleteAgendamentos($id);
    }
    
}
?>
