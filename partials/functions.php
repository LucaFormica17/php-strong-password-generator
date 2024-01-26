<?php 

function generatePassword($passLen, $characters, $upperCharacters, $numbers, $symbols){
    $pass_array = [];
    

    for($i=0; $i< ($passLen - 3); $i++){
        $char = $characters[rand(0, 25)];
        array_push($pass_array, $char);
    };

    array_push($pass_array, $upperCharacters[rand(0,25)]);
    array_push($pass_array, $numbers[rand(0,9)]);
    array_push($pass_array, $symbols[rand(0,9)]);

    shuffle($pass_array);
    
    $password = implode($pass_array);
    

    return $password;

}

?>