<?php

include "nivel.php";

class estado {
    private $id, $descricao, $nivel;
    function __set($prop, $val) {
        $this->$prop = $val;
    }
    function __get($prop) {
        return $this->$prop;
    }
    function __construct($id, $descricao, $nivel) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->nivel = $nivel;
    }
}
?>