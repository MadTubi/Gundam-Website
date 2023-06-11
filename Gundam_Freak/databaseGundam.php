<?php

    class DatabaseG{
        public function_construct() {
            die('Init function error');
        }

        public static function dbConnect() {
            $mysqli = null;
            //try connection to database

        require_once("/home/mtaylo11/DBGundam.php");

        try{
            $mysqli = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME,USERNAME,PASSWORD);
            echo "Successful Connection";
        }
        catch (PDOException $e){
            //Catch potential error, if unable to connect
            echo "Could not connect";
            die(-> getMessage());
        }

        return $mysqli;
        }

        public static functionm dbDisconnet(){
            $mysqli = null;
        }
    }



?>