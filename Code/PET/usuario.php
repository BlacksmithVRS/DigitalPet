<?php
class usuario {
    private $id, $nome, $email, $senha;
    function __set($prop, $val) {
        $this->$prop = $val;
    }
    function __get($prop) {
        return $this->$prop;
    }
    function __construct($id, $nome, $email, $senha) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email= $email;
        $this->senha = $senha;
    }
}
?>