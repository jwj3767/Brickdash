<?php
    include_once "include.php";
    function generateGroupCode(){
        $seed = str_split('abcdefghijklmnopqrstuvwxyz'
            .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
            .'0123456789!');
        $rand = "";
        foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];
        return $rand;
    }

    function createGroup($username){
        $code = generateGroupCode();

    }
    function joinGroup($attempt, $groups){
        #foreach ()
    }

?>