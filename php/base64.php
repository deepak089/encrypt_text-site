<?php

if(isset($_POST['key'])){
     
    $enter_string=$_POST['name'];
    $key=$_POST['key'];
    // $secret_key=bin2hex($key);

    function encrypt_string($string,$key){
        // $unsecret_key=hex2bin($secret_key);
        if(($string== "")  || ($key== "")){
            echo "Fill the empty details else visit to about page<br>";
        }
        else{
            
        $encoded_string=base64_encode(($string));
        return $encoded_string;

        }
        

    }
    echo "<br>your base64_encode hash value is:<br><br>".encrypt_string($enter_string,$key);
}


  




?>