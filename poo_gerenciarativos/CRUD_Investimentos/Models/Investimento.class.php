<?php 

require __DIR__ . '/Model.class.php';

class Investimento extends Model{
    public function __construct(){
        parent::__construct(); // chama o construtor da classe pai
        $this->tabela = 'investmentos';
    }
    function inserir(array $dados):?int{
        
        return null;
     }
     function atualizar(int $id, array $dados):bool{
        return true;
     }
     function apagar(int $id):bool{
        return true;
     }
     function listar(int $id = null):?array{
        return null;
     }
}