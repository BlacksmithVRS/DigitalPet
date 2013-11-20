<?php
class nivel {
    private $id, $grau;
    function __set($prop, $val) {
        $this->$prop = $val;
    }
    function __get($prop) {
        return $this->$prop;
    }
    function __construct($id, $grau) {
        $this->id = $id;
        $this->nome = $grau;
    }
}
?>