<?php
class usuario{
    private $usuario;
    private $password;
    public function __construct($usuario,$password,$salt){

        $this->usuario = $usuario;
        $this->password = $password;
        $this->salt = $salt;

    }

    public function validar_usuario(){
        
        $tabla[]=["usuario"=>"Juan123","password"=>"b390df3b1ecc64f5b15552a63c5853ef5de6b372","salt"=>"ehmsCDUEB"];
        $tabla[]=["usuario"=>"carlossamaniego","password"=>"2352f12949a7ed111a363eb60553c7e0be2c8556","salt"=>"tErKXnTVK"];
        $tabla[]=["usuario"=>"mariaanthonia","password"=>"79db1e93b393a61306279c6f7fc25b0def8698d3","salt"=>"jgPJcIDTL"];
        $tabla[]=["usuario"=>"bastianse","password"=>"7378d28d8f58d5231e4e9d069bc1fd8100d6ac5e","salt"=>"ZQWAQlqPO"];
        $tabla[]=["usuario"=>"taniatb","password"=>"19b5725dec66f288903c8e5040d61512f5f00bc3","salt"=>"UPsnxoOCD"];
        foreach($tabla as $t){
            $pass = sha1($this->password.$t["salt"]);
            if($this->usuario == $t["usuario"] && $pass == $t["password"])
                return $t;
        }
        return [];
        
    }
}

?>