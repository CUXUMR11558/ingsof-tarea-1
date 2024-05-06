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
    //metodo getter para la propiedad protegida de nombre
    public function getNombre () : string{
        return $this ->nombre;
    }
    public function setNombre(string $nombre){
        $this ->nombre = $nombre;
    }
}
$producto = new producto('tablet',200, true);
//$producto -> mostrarProducto
echo $producto->nombre;//produce un erro
echo $producto->getNombre();//obtoeneelnombre
$producto->setNombre('nuevo nombre');
echo $producto->getNombre();//obtiene nombre