<?php
class productos_models{
    private $id;
    private $produto;
    private $descripcion;
    private $precio;
    private $precioventa;
    private $cantidad;

    public function __construct($id,$descripcion,$precio,$precio_venta,$cantidad){

        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->precio_venta = $precio_venta;
        $this->cantidad = $cantidad;

    }
    public function getId(){
        return $this->id;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getprecio(){
        return $this->precio;
    }
    public function getprecio_venta(){
        return $this->precio_venta;
    }
    public function getcantidad(){
        return $this->cantidad;
    }


    public static function Mostrar(){
        
        $productos[]=["id"=>"1","producto"=>"Televisor","descripcion"=>"Esto es un televisor samsung 70'' UHD 4K","precio"=> 400,"precioventa"=>seg::itbmss(400),"cantidad"=>25];
        $productos[]=["id"=>"2","producto"=>"Smartphone","descripcion"=>"Esto es un smartphone aiphon note 14 pro plus max prime","precio"=> 320,"precioventa"=>seg::itbmss(320),"cantidad"=>100];
        $productos[]=["id"=>"3","producto"=>"Lavadora","descripcion"=>"Esto es una lavadora 22KG 48 LB Acero inoxidable ","precio"=> 300,"precioventa"=>seg::itbmss(300),"cantidad"=>34];
        $productos[]=["id"=>"4","producto"=>"laptop","descripcion"=>"Esto es una laptop HP Omen 16'' 32 GB RAM Ryzen 7 RTX 3070","precio"=> 650,"precioventa"=>seg::itbmss(650),"cantidad"=>28];
        $productos[]=["id"=>"5","producto"=>"Ayuda","descripcion"=>"Si borro esto ya no funciona el codigo","precio"=> 1,"precioventa"=>seg::itbmss(1),"cantidad"=>1];
        $productos[]=["id"=>"6","producto"=>"Mouse","descripcion"=>"Esto es un mouse Razer Viper Ultimate","precio"=> 35,"precioventa"=>seg::itbmss(35),"cantidad"=>35];
        $productos[]=["id"=>"7","producto"=>"Vr para mascotas","descripcion"=>"Esto es realidad virtual para mascotas de todo tipo","precio"=> 55,"precioventa"=>seg::itbmss(55),"cantidad"=>80];
        $productos[]=["id"=>"8","producto"=>"Fogata para niños","descripcion"=>"Esto es una fogata para niños de la maxima calidad, hasta 300 ºC","precio"=> 29,"precioventa"=>seg::itbmss(29),"cantidad"=>72];
        $productos[]=["id"=>"9","producto"=>"Cinturon","descripcion"=>"Esto es un cinturon de seguridad para el asiento de su bicicleta","precio"=> 20,"precioventa"=>seg::itbmss(20),"cantidad"=>64];
        $productos[]=["id"=>"10","producto"=>"Asiento para baño ","descripcion"=>"Esto es un asiento para baño con textura de cesped","precio"=> 25,"precioventa"=>seg::itbmss(25),"cantidad"=>59];
        $productos[]=["id"=>"11","producto"=>"Cojin","descripcion"=>"Esto es un conjin con la cara de Nicolas Cage","precio"=> 15,"precioventa"=>seg::itbmss(15),"cantidad"=>82];
        $productos[]=["id"=>"12","producto"=>"Funda movil","descripcion"=>"Esto es una funda para un aiphon note 14 pro plus max prime","precio"=> 8,"precioventa"=>seg::itbmss(8),"cantidad"=>93];
        
        return $productos;
        
    }
    public function bucar(){
        
        $productos[]=["id"=>"1","producto"=>"Televisor","descripcion"=>"Esto es un televisor samsung 70'' UHD 4K","precio"=> 400,"precioventa"=>seg::itbmss(400),"cantidad"=>25];
        $productos[]=["id"=>"2","producto"=>"Smartphone","descripcion"=>"Esto es un smartphone aiphon note 14 pro plus max prime","precio"=> 320,"precioventa"=>seg::itbmss(320),"cantidad"=>100];
        $productos[]=["id"=>"3","producto"=>"Lavadora","descripcion"=>"Esto es una lavadora 22KG 48 LB Acero inoxidable ","precio"=> 300,"precioventa"=>seg::itbmss(300),"cantidad"=>34];
        $productos[]=["id"=>"4","producto"=>"laptop","descripcion"=>"Esto es una laptop HP Omen 16'' 32 GB RAM Ryzen 7 RTX 3070","precio"=> 650,"precioventa"=>seg::itbmss(650),"cantidad"=>28];
        $productos[]=["id"=>"5","producto"=>"Ayuda","descripcion"=>"Si borro esto ya no funciona el codigo","precio"=> 1,"precioventa"=>seg::itbmss(1),"cantidad"=>1];
        $productos[]=["id"=>"6","producto"=>"Mouse","descripcion"=>"Esto es un mouse Razer Viper Ultimate","precio"=> 35,"precioventa"=>seg::itbmss(35),"cantidad"=>35];
        $productos[]=["id"=>"7","producto"=>"Vr para mascotas","descripcion"=>"Esto es realidad virtual para mascotas de todo tipo","precio"=> 55,"precioventa"=>seg::itbmss(55),"cantidad"=>80];
        $productos[]=["id"=>"8","producto"=>"Fogata para niños","descripcion"=>"Esto es una fogata para niños de la maxima calidad, hasta 300 ºC","precio"=> 29,"precioventa"=>seg::itbmss(29),"cantidad"=>72];
        $productos[]=["id"=>"9","producto"=>"Cinturon","descripcion"=>"Esto es un cinturon de seguridad para el asiento de su bicicleta","precio"=> 20,"precioventa"=>seg::itbmss(20),"cantidad"=>64];
        $productos[]=["id"=>"10","producto"=>"Asiento para baño ","descripcion"=>"Esto es un asiento para baño con textura de cesped","precio"=> 25,"precioventa"=>seg::itbmss(25),"cantidad"=>59];
        $productos[]=["id"=>"11","producto"=>"Cojin","descripcion"=>"Esto es un conjin con la cara de Nicolas Cage","precio"=> 15,"precioventa"=>seg::itbmss(15),"cantidad"=>82];
        $productos[]=["id"=>"12","producto"=>"Funda movil","descripcion"=>"Esto es una funda para un aiphon note 14 pro plus max prime","precio"=> 8,"precioventa"=>seg::itbmss(8),"cantidad"=>93];
        foreach($productos as $t){
            
            if($this->id == $t["id"])
                return $t;
        }
        return [];
        
    }
}

?>