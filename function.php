<?php 



function getRandomPassword($charlenght){

    $charsNumb = "1234567890";
    $charsLowercase = "abcdefghijklmnopqrstuvwxyz";
    $charsUppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $symbols = "!#$%&'()*+,-.:;<=>?@[\]^_{|}";
    $charsTotal = $charsLowercase . $charsUppercase . $charsNumb. $symbols ;

    $finalpassword = "";

    for ($i= 0; $i <$charlenght ; $i++) { 
        $charsIndex = rand(0, strlen($charsTotal)-1);

        $finalpassword .= $charsTotal[$charsIndex];

    }



    return $finalpassword;


}

    
?>