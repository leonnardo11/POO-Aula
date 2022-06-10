<?php

class Investimento implements interfaceCrud{

    private $id;
    private $nome;
    private $quantidade;

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
    public function setQuantidade($val){
        $this->id = $val;
    }

    public function getQuantidade(){
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



}