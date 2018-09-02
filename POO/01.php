<?php

/**
 * 
 */
class Pessoa
{
    public $nome;
    
    public function falar()
    {
        
        return "o meu nome é " . $this->nome;
        
        
        
        
    }
}

$andre = new Pessoa();

$andre->nome = "André Olivato";

echo $andre->falar();

