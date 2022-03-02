<?php
abstract class ClasseAbstrata {
    abstract public function teste();
}
class ClasseImplementacao extends ClasseAbstrata {
    public function teste() {
        echo "Método teste() chamado!<br>";
    }
}
$obj = new ClasseImplementacao;
$obj->teste();
?>