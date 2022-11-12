<?php
class usuario{
    private $usuario;
    private $password;
    private $salt;
    private $nombre;

    public function __construct($usuario, $password, $salt, $nombre)
    {
        $this->usuario = $usuario;
        $this->password = $password;
        $this->salt = $salt;
        $this->nombre = $nombre;
    }

    public function valida_usuario(){

        #password = hash(password_usuario . salt)
        #salt


        $tabla[]=["usuario"=>"ichava", "password"=>"604298ecb098499369446dcbd83bce82856081dd", "salt"=>"Uf8wzEt1E03H", "nombre"=>"Irvin Chavarria"];
        $tabla[]=["usuario"=>"mcastro", "password"=>"66bc96775276cacae81a4945eebe4703384b61bc", "salt"=>"5WD3V3yZqnhB", "nombre"=>"Maria Castro"];
        $tabla[]=["usuario"=>"jperez", "password"=>"d7f78a50b9cf20fca778ea14beaa3f3b9d670bcf", "salt"=>"8dThTQr0C1ak", "nombre"=>"Irvin Chavarria"];
        $tabla[]=["usuario"=>"lsanchez", "password"=>"f5dd14a7bd8eb7817d5eaf9b91ac9f6afd3c13ad", "salt"=>"v1o1T942yvVn", "nombre"=>"Luis Sanchez"];
        foreach($tabla as $t)
        {
            $pass = sha1($this->password.$t["salt"]);
            if ($this->usuario == $t["txtusuario"] && $pass == $t["txtpassword"])
            return $t;
        }
        return [];
    }
    

    
    
}
?>