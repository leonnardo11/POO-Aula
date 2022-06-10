<?php
chdir(__DIR__);
require_once '../interfaces/interfaceCrud.php';
require("conecta.php");

class Cliente implements interfaceCrud{

    private $id;
    private $nome;
    private $telefone;

    
    public function __construct($bd){
        $this->db = $bd;
    }

    public function setId($val){
        $this->id = $val;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($val){
        $this->nome = $val;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setTelefone($val){
        $this->nome = $val;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function salvar(array $dados){


        if(empty($_POST['nome'] || $_POST['telefone'])){
            die('ERRO! os campos são obriatórios');
        }
         $stmt = $this->db->prepare(" INSERT INTO clientes
                                    (nome, telefone)
                                VALUES 
                                    (:nome, :telefone)");
        
        $valores[':nome'] = $_POST['nome'];
        $valores[':telefone'] = $_POST['telefone'];


        //Executamos a consulta SQL
        if( $stmt->execute($valores) ){
            echo "salvo com sucesso";
        } else {
            echo "<br><br> Não consegui gravar no banco :-(";
        }
        

    }

    public function apagar(int $id):bool{

        if($this->bd->query("DELETE FROM cliente WHERE id = $id")){

            return true;

      }else{

       return false;

      }
   
    }

    public function editar(int $id, array $dados){


    }

    /*
    public function listar(int $id = null): array{
        
    }
    */
    
}