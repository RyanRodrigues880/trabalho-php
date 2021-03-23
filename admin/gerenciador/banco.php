<?php

class Banco
{
    private static $dbNome = 'id16366396_lasorella';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'id16366396_killer';
    private static $dbSenha = '147258369Rr@';
    
    private static $cont = null;
    
    public function __construct() 
    {
        die('-');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>
