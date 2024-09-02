<?php

declare(strict_types=1);

class Pessoa
{
    private string $Nome;
    private int $Idade;

    function __construct(string $Nome, int $Idade)
    {
        $this -> Nome = $Nome;
        $this -> Idade = $Idade;
    }

    public function FazerSaudacao() : void
    {
        echo "<br>O {$this->Nome} foi criado, ele tem {$this->Idade} anos.";
    }
}

$p1 = new Pessoa("Tiago",29);

$p1->FazerSaudacao();