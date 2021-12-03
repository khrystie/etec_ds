<?php

class Usuario {
    private $id;
    private $nome;
	private $cpf;
	private $email;
	private $dataNascimento; 
    private $senha;

    //ID
    public function setID($id) {$this->id = $id;}
    public function getID() {return $this->id;}
    //nome
    public function setNome($nome) {$this->nome = $nome;}
    public function getNome() {return $this->nome;}
    //cpf
    public function setCPF($cpf) {$this->cpf = $cpf;}
    public function getCPF() {return $this->cpf;}
    //Email
    public function setEmail($email) {$this->email = $email;}
    public function getEmail() {return $this->email;}
    //Data de nascimento
    public function setDataNascimento($dataNascimento) {$this->dataNascimento = $dataNascimento;}
    public function getDataNascimento() {return $this->dataNascimento;}
    // Senha
    public function setSenha($senha) {$this->senha = $senha;}
    public function getSenha() {return $this->senha;}


    //método inserirBD
    public function inserirBD() {
        require_once 'ConexaoBD.php'; //carrega o arquivo de conexão
        $con = new ConexaoBD(); // instancia a classe ConexaoBD
        $conn = $con->conectar(); //Conectar ao Banco de dados e retornar essa conexão, atribuindo a um novo objeto
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error); 
        }
        
        // Script de insert
        // $sql = "INSERT INTO usuario (nome, cpf, email, senha) 
        // VALUES ('".$this->nome."', 
        // '".$this->cpf."', 
        // '".$this->email."',
        // '".$this->senha."')";
        $sql = "INSERT INTO usuario(nome, cpf,email, senha)
            VALUES (
                '{$this->nome}', 
                '{$this->cpf}',
                '{$this->email}',
                '{$this->senha}'
                )
                ";
                    
        if ($conn->query($sql) === TRUE) {
            $this->id = mysqli_insert_id($conn); 
            $conn->close();
        return TRUE;
        } 
        else {
            $conn->close();
            return FALSE;
        }
    }

    //método carregarUsuário
    //public function carregarUsuario(){
    public function carregarUsuario($cpf){ 
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD(); 
        $conn = $con->conectar(); 
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error); 
        }

        //$sql = "SELECT * FROM usuario WHERE cpf = ".$cpf ; 
        $sql = "SELECT * FROM usuario WHERE cpf = '{$cpf}'"; //como no bd cpf é varchar, deixar entre aspas simples
        $re = $conn->query($sql);
        $r = $re->fetch_object(); // se tiver por ex. 10 usuarios, vai ter 10 objetos - como se fosse array de objetos

        if($r != null) {
            $this->id = $r->idusuario;
            $this->nome = $r->nome;
            $this->email = $r->email;
            $this->cpf = $r->cpf; 
            $this->dataNascimento = $r->dataNascimento; 
            $this->senha = $r->senha;
            $conn->close();
            return true;
        }   else {
            $conn->close();
            return false;
        }
    }

    //método atualizarBD
    public function atualizarBD() {
        require_once 'ConexaoBD.php'; 
        $con = new ConexaoBD();
        $conn = $con->conectar();

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "UPDATE usuario SET nome = '".$this->nome."', 
            cpf = '". $this->cpf."', 
            dataNascimento = '". $this->dataNascimento."',
            email='".$this->email."' 
            WHERE idusuario ='". $this->id. "'" ;
       
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return TRUE;
        } else {
            $conn->close();
            return FALSE;
        }
    }


    //método Administrador
    public function listaCadastrados() {
        //inclusão da classe Conexao BD
        require_once 'ConexaoBD.php';
        //instância do Objeto da Classe ConexaoBD
        $con = new ConexaoBD();
        //verificar se houve conexão ou não
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //confeção da sentença SQL
        $sql = "SELECT idusuario, nome FROM usuario;" ;
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }


       //listar campos de determinado usuário
       public function listaCamposUsuario($idusuario) {
        //inclusão da classe Conexao BD
        require_once 'ConexaoBD.php';
        //instância do Objeto da Classe ConexaoBD
        $con = new ConexaoBD();
        //verificar se houve conexão ou não
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //confeção da sentença SQL
        $sql = "SELECT * FROM usuario WHERE idusuario = $idusuario" ;
        $re = $conn->query($sql);
        $conn->close();


        return $re;
    }
  

}

?>