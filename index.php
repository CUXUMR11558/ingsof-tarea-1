<?php
class producto {

    //definicion de los atributos
    public string $nombre;
    public int $precio;
    public bool $disponible;
    //metodo constructor, se ejecuta al efectuarr la instancia
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        $this-> nombre = $nombre;
        $this-> precio = $precio;
        $this-> disponible = $disponible;
        
    }
    public function mostrarProducto()
    {
        echo "el producto es: " . $this-> nombre . " y su precio es de : " . $this -> precio;
    
    }
}

//istancia de la clase en el primer objeto
$producto = new producto('tablet',200, true);

//llamado al metodp mostrar producto, utilizado sintaxis de flecha ->
$producto -> mostrarProducto();
//impresion en pantalla del primer objeto
echo "<pre>";
var_dump($producto);
echo "</pre>";

//instancia de la clase en el segundo objeto
$producto2 = new producto('monitor curvo', 300, true);
$producto2 ->mostrarProducto();
echo "<pre>";
var_dump($producto2);
echo "</pre>";ñ