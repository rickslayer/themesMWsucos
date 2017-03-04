<?php
class config{
    public function Executa($cSQL){
        if (!$cSQL){
        }
        try{
            $root = "root";
            $pass = "admin";
            $pdo = new PDO("mysql:host=localhost;dbname=mwsucos", $root,  $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $resp = $pdo->prepare($cSQL);
            $resp->execute();
            $aRet = $resp->fetchAll(PDO::FETCH_ASSOC);

            return $aRet;


        }catch(PDOException $e){

            echo $e->getMessage();
        }

    }


}



?>