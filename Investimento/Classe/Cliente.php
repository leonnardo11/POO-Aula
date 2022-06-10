<?php
chdir(__DIR__);
require_once '../interfaces/interfaceCrud.php';

class Cliente implements interfaceCrud{

    private $id;
    private $nome;
    private $telefone;

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
        $this->nome = $dados['nome'];
        $this->telefone = $dados['telefone'];
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