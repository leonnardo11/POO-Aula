<?php

interface interfaceCrud{

    public function salvar(array $dados);

    public function apagar(int $int):bool;

    public function editar(int $id, array $dados);

    /*
    public function listar(int $id = null): array;
    */
}
