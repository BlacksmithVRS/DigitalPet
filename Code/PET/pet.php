<?php

include "estado.php";

class pet {
    private $id, $nome, $usuario, $nascimento, $estado;
    function __set($prop, $val) {
        $this->$prop = $val;
    }
    function __get($prop) {
        return $this->$prop;
    }
    function __construct($id, $nome, $usuario, $nascimento, $estado) {
        $this->id = $id;
        $this->nome = $nome;
        $this->usuario= $usuario;
        $this->nascimento = $nascimento;
        $this->estado = $estado;
    }
}
?>