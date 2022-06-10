<?php
require_once '../Models/Cliente.class.php';
require_once '../Models/Investimento.class.php';
class Main{

    private Cliente $cliente;
    private Investimento $investimento;

    public function __construct(){

        $this->cliente = new Cliente;
        $this->investimento = new Investimento;
        $this->listarCliente();
    }

    public function listarCliente(){

        $clientes = $this->cliente->listar();
        
        foreach($cliente as $cliente){

            $carteira = $this->investimento->carteiraCliente($cliente['id']);
            $totalAtivos = 0;

            foreach($carteira as $cadaAtivo){
                $totalAtivo += $cadaAtivo['qtd'];
            }

            $cliente['totalAtivos'] = $totalAtivos;
        }
        require_once '../views/cliente.listar.php';
    }
}
new Main;
