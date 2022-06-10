<?php
chdir(__DIR__);
require_once '../interfaces/interfaceCrud.php';

class Ativos implements interfaceCrud{

    private $id;
    private $nome;
    

    public function setId($val){
        $this->id = $val;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($val){
        $this->id = $val;
    }

    public function getNome(){
        return $this->nome;
    }


    public function salvar(array $dados){
        $this->nome = $dados['nome'];
    }

    public function apagar(int $id):bool{

        if($this->bd->query("DELETE FROM ativos WHERE id = $id")){

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