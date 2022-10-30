<?php

//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

define('BD_SERVIDOR','localhost');//dominio
define('BD_USUARIO','root');//admin
define('BD_SENHA','');//senha
define('BD_BANCO','clientes');//nome do banco
    
class Banco{

    protected $mysqli;//na classe Banco mexemos com SQL

    public function __construct(){
        $this->conexao();//primeiro estabelece conexão
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);//pega as variáveis definidas e atribui ao mysqli
        //new mysqli(localhost , root , , cadastro)
    }

    public function setAgendamentos($nome,$endereco,$bairro,$cep,$cidade,$estado,$email,$senha){//todas as variáveis do cadastro cabe nesse método
        $stmt = $this->mysqli->prepare("INSERT INTO tabela (`nome`, `endereço`, `bairro`, `cep`, `cidade`, `estado`, `email`, `senha`) 
        VALUES ('$nome','$endereco','$bairro','$cep','$cidade','$estado','$email','$senha')");//executa o código no SQL
        //insert nome da tabela(os atributos) values(nome da variável no código)
        
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }
    public function getAgendamentos($id){
        try {
            if(isset($id) && $id>0){//se id não existir e id>0
                $stmt=$this->mysqli->query("SELECT * FROM tabela WHERE id='".$id."';"); 
            }

            else{
                $stmt=$this->mysqli->query("SELECT * FROM tabela");//exibe tudo que estiver contido no banco
            }

            $lista = $stmt->fetch_all(MYSQLI_ASSOC);//pegou oto item do mysql e jogou na variável lista
            //A função fetch_all() / mysqli_fetch_all() busca todas as linhas de resultados e retorna o conjunto de resultados como um array associativo, um array numérico ou ambos.
            $f_lista=array();
            $i=0;

            foreach ($lista as $l ) {//lista atribui l. foreach faz um laço de repetição para tudo que tem no array.
                //o array é indicado automáticamente
                
                
                $f_lista[$i]['id'] = $l['id'];//...
                $f_lista[$i]['txtNome']=$l['nome'];//atribui a coluna a matriz do código na coluna do mysql
                $f_lista[$i]['txtEndereço']=$l['endereço'];//$f_lista[0][txtEndereço]=1registro[morro do pantanal]
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

    public function updateAgendamentos($id, $nome,$endereco,$bairro,$cep,$cidade,$estado,$email,$senha){
        $stmt = $this->mysqli->prepare("UPDATE tabela SET `nome`='".$nome."', `endereço`='".$endereco."', `bairro`='".$bairro."', `cep`='".$cep."', `cidade`='".$cidade."', `estado`='".$estado."', `email`='".$email."', `senha`='".$senha."'WHERE `id`='".$id."';");
        //where serve pra identificar no sql. ele faz update e indica qual registro alterar pelo id
        
        
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }
    
    public function deleteAgendamentos($id){
        $stmt = $this->mysqli->query("DELETE FROM tabela WHERE `id` = '" . $id . "';");//delete todo o registro com a identificação do id
        if( $stmt > 0){
            return true;
        } else{
            return false;
        }
    }

}    

?>