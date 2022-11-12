<?php

class seguridad{

    public static function codificar($p){
        return base64_encode($p);

    }

    public static function decodificar($p){
        return base64_decode($p);

    }
    public static function getToken(){
        if(isset($SESSION["token"]))
        return $_SESSION["token"];
        $token = sha1(random_bytes(100));
        $_SESSION["token"] = $token;
        return $token;
    }

    public static function validaSesion($token){
        if (!hash_equals($token,$_SESSION["token"]))
            return false;
        return true;
    }
}

?>