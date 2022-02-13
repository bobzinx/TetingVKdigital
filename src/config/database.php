<?php 
class Database {


public static function getConnection(){
        $envPath = realpath(dirname(__FILE__).'/../env.ini');
        $env = parse_ini_file($envPath);

        $coon = new mysqli(
        $env['host'], $env['username'], $env['password'],
        $env['database']
        );
        if($coon->connect_error){
            die("error". $coon->connect_error);
        }

        return $coon;

}

public static function getResultFromQuery($sql){

    $coon = self::getConnection();
    
   $result = $coon->query($sql);

    $coon->close();

    return $result;


}

}