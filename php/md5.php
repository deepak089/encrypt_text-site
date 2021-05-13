<?php

if(isset($_POST['key'])){
     
    $enter_string=$_POST['name'];
    $key=$_POST['key'];
   
    // $secret_key=bin2hex($key);

    function encrypt_string($string,$key){
        // $unsecret_key=hex2bin($secret_key);
        $gen_key=$_POST['gen_key'];
        if(($string== "")  || ($key== "")){
            echo "Fill the empty details else visit to about page<br>";
        }
        else{
            if($gen_key === $key){
            
                $encoded_string=md5(($string));
                return $encoded_string;

            }
                    else{
                    ?><script>alert("get your generated key by clicking on generate button"); </script> <?php ;
                    }
    }

    }
    echo "<br>your md5 hash value is:<br><br>".encrypt_string($enter_string,$key);
}


  




?>