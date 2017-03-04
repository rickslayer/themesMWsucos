<?php
 require_once ('config.php');
class contatos
{

    function __construct()
    {

    }

    public function Le()
    {
        $id = 40;

        $SQL = "";
        $SQL = "SELECT * ";
        $SQL .= " FROM" ;
        $SQL .= " mw_posts";
        if ($id){
            $SQL .= " where ID = " .$id;
        }
        $result = new config();
        $aRet = array();
        $aRet = $result->Executa($SQL);
        die(print_r($aRet, true));
        return $aRet;


    }


}

?>