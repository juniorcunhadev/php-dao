<?php

namespace Repository;

class Cliente
{
    public function listarDados()
    {
        $sql = new Sql();

        return $sql->selectQuery("SELECT * FROM cliente");
    }
}