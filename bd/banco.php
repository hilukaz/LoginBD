<?php

//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

define('BD_SERVIDOR','localhost');//dominio
define('BD_USUARIO','root');//admin
define('BD_SENHA','');//senha
define('BD_BANCO','clientes');//nome do banco
    
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);//pega as variáveis definidas e atribui ao mysqli
        //new mysqli(localhost , root , , cadastro)
    }

    public function setAgendamentos($nome,$endereco,$bairro,$cep,$cidade,$estado,$email,$senha){
        $stmt = $this->mysqli->prepare("INSERT INTO tabela (`nome`, `endereço`, `bairro`, `cep`, `cidade`, `estado`, `email`, `senha`) 
        VALUES ('$nome','$endereco','$bairro','$cep','$cidade','$estado','$email','$senha')");
        
        //insert nome da tabela(os atributos) values(nome da variável no código)
        
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }
    public function getAgendamentos(){
        try {
            $stmt=$this->mysqli->query("SELECT * FROM tabela");
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_lista=array();
            $i=0;
            foreach ($lista as $l ) {
                
                $f_lista[$i]['id'] = $l['id'];
                $f_lista[$i]['txtNome']=$l['nome'];
                $f_lista[$i]['txtEndereço']=$l['endereço'];
                $f_lista[$i]['txtBairro']=$l['bairro'];
                $f_lista[$i]['txtCep']=$l['cep'];
                $f_lista[$i]['txtCidade']=$l['cidade'];
                $f_lista[$i]['txtEstado']=$l['estado'];
                $f_lista[$i]['txtEmail']=$l['email'];
                $f_lista[$i]['txtSenha']=$l['senha'];
                $i++;
                # code...
            }
            return $f_lista;
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar buscar todos";
            //throw $th;
        }
    }

    public function updateAgendamentos($nome,$endereco,$bairro,$cep,$cidade,$estado,$email,$senha){
        $stmt = $this->mysqli->query("UPDATE tabela SET `nome` = '" . $nome . "', `endereço` = '" . $endereco . "', `bairro` = '" . $bairro . "', `cep` = '" . $cep . "', `cidade` = '" . $cidade . "', `estado` = '" . $estado . "',`email` = '" . $email . "', `senha` = '" . $senha . "'");
        if( $stmt > 0){
            return true;
        } else {
            return false;
        }

    }

}    

?>