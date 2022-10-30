<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $email;
    private $senha;

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

    public function incluir(){
        return $this->setAgendamentos($this->getNome(),$this->getEndereco(),$this->getBairro(),$this->getCep(),$this->getCidade(),$this->getEstado(),$this->getEmail(),$this->getSenha());
        //executa o método com esse parametro
    }

    public function listar(){
        return $this ->getAgendamentos();
    }

    public function editar(){
        return $this->updateAgendamentos($this->getNome(),$this->getEndereco(),$this->getBairro(),$this->getCep(),$this->getCidade(),$this->getEstado(),$this->getEmail(),$this->getSenha());
        //executa o método com esse parametro
    }
    
}
?>
