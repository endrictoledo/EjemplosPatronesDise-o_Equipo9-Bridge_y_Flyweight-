<?php
class ArbolFlyweight {
    private $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function dibujar($x, $y) {
        echo "<div style=' width:20px; height:20px; background-color:{$this->color}; 
        border-radius:50%; position:absolute; left:{$x}px; top:{$y}px; '></div>";
    }
}

class ArbolFactory {
    private $flyweights = [];

    public function obtenerArbol(String $color) {
        if (!isset($this->flyweights[$color])) {
            $this->flyweights[$color] = new ArbolFlyweight($color);
        }
        return $this->flyweights[$color];
    }
}

class ArbolContexto {
    private $x;
    private $y;
    private $arbol;

    public function __construct(int $x, int $y, ArbolFlyweight $arbol) {
        $this->x = $x;
        $this->y = $y;
        $this->arbol = $arbol;
    }

    public function mostrar() {
        $this->arbol->dibujar($this->x, $this->y);
    }
}

Class clienteBosque {
    private $bosque = [];
    private $factory;

    public function __construct() {
        $this->factory = new ArbolFactory();
    }

    public function obtenerBosque(){
            return $this->bosque;
    }

    public function hacerBosque ($cantidad){
        $arbolVerde = $this->factory->obtenerArbol("green");

        for ($i = 0; $i < 2000; $i++) {
            $x = rand(10, 1920);
            $y = rand(10, 1200);
            $this->bosque[] = new ArbolContexto($x, $y, $arbolVerde);
        }
    }
}

$cliente = new ClienteBosque();
$cliente->hacerBosque(2000);
$bosque = $cliente->obtenerBosque();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Patrón Flyweight: Bosque</title>
</head>
<h1>Bosque patron Flyweight</h1>
<body style="position:relative; width:1920px; height:1200px; background:#ffffff;">
    <?php
    foreach ($bosque as $arbol) {
        $arbol->mostrar();
    }
    ?>
</body>
</html>

