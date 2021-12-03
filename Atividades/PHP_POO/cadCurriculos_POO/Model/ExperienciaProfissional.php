<?php
    class ExperienciaProfissional{
        private $id;
        private $idusuario;
        private $inicio;
        private $fim;
        private $empresa;
        private $descricao;

        //ID
        public function setID($id) {
            $this->id = $id;}
        public function getID()
        {
            return $this->id;}
        //idusuario
        public function setIdUsuario($idusuario) {$this->idusuario = $idusuario; }
        public function getIdUsuario() {return $this->idusuario; }
        //inicio
        public function setInicio($inicio) {$this->inicio = $inicio; }
        public function getInicio() {return $this->inicio;}
        //fim
        public function setFim($fim) {$this->fim = $fim; }
        public function getFim()  {     return $this->fim; }
        //Empresa
        public function setEmpresa($empresa) { $this->empresa = $empresa; }
        public function getEmpresa() { return $this->empresa; }
        //Descrição
        public function setDescricao($descricao) { $this->descricao = $descricao; }
        public function getDescricao() { return $this->descricao; }

        //Método inserirBD
        public function inserirBD() {
            require_once 'ConexaoBD.php';
            $con = new ConexaoBD(); 
            $conn = $con->conectar(); 
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO experienciaprofissional (idusuario, inicio, fim, empresa, descricao)
            VALUES (
                '{$this->idusuario}', 
                '{$this->inicio}',
                '{$this->fim}',
                '{$this->empresa}',
                '{$this->descricao}'
                )
                ";
            
            if ($conn->query($sql) === true) { 
                $this->id = mysqli_insert_id($conn);
                 $conn->close();
                return true;
            } else {
                $conn->close();
                return false;
            }
        }

        //Carregar teste
        // public function carregarExperiencia($empresa){ 
        //     require_once 'ConexaoBD.php';
        //     $con = new ConexaoBD(); 
        //     $conn = $con->conectar(); 
            
        //     if ($conn->connect_error) {
        //         die("Connection failed: " . $conn->connect_error); 
        //     }
    
        //     //$sql = "SELECT * FROM usuario WHERE cpf = ".$cpf ; 
        //     $sql = "SELECT * FROM experienciaprofissional WHERE empresa = '{$empresa}'"; 
        //     $re = $conn->query($sql);
        //     $r = $re->fetch_object(); 

        //     if($r != null) {
        //         $this->id = $r->idusuario;
        //         $this->inicio = $r->inicio;
        //         $this->fim = $r->fim;
        //         $this->empresa = $r->empresa; 
        //         $this->descricao = $r->descricao; 
        //         $conn->close();
        //         return true;
        //     }   else {
        //         $conn->close();
        //         return false;
        //     }
        // }

        //Método excluirBD
        public function excluirBD($id) {
            require_once 'ConexaoBD.php'; 
            $con = new ConexaoBD();
            $conn = $con->conectar(); 
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error); 
            } 

            $sql = "DELETE FROM experienciaprofissional
                        WHERE idexperienciaprofissional = '{$id}';
                    ";

            if ($conn->query($sql) === true) {
                $conn->close();
                return true;
            } else {
                $conn->close();
                return false;
            }
        } 
        
        //Método listaFormacao
        public function listaExperiencias($idusuario) {
            require_once 'ConexaoBD.php';
            $con = new ConexaoBD(); 
            $conn = $con->conectar();
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error); 
            }
            
            $sql = "SELECT * FROM experienciaprofissional
                     WHERE idusuario = '{$idusuario}'; 
                    ";
        
            $re = $conn->query($sql);
            $conn->close();
            return $re;
        }        

    }
?>
