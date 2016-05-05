<?php
class MiColección implements IteratorAggregate
{
    private $items = array();
    private $cuenta = 0;

    // Se requiere la definición de la interfaz IteratorAggregate
    public function getIterator() {
        return new MiIterador($this->items);
    }

    public function add($valor) {
        $this->items[$this->cuenta++] = $valor;
    }
}

$colección = new MiColección();
$colección->add('valor 1');
$colección->add('valor 2');
$colección->add('valor 3');

foreach ($colección as $clave => $val) {
    echo "clave/valor: [$clave -> $val]\n\n";
}
?>