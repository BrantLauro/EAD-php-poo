<?php

class Aula {
    private $nome;
    private $link;

    public function __construct($nome, $link) {
        $this->nome = $nome;
        $this->link = $link;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLink() {
        return $this->link;
    }

    public function setNome($nome) {
        $this->nome = $nome; 
    }

    public function setLink($link) {
        $this->link = $link;
    }
}