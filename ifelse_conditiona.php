<?php

$age = 56;

//if($age < 88){
  //  echo "you are 88 yrs old";
//}
//else{
 //   echo "you are young";
//}


//switch cases
function checkAge($age) {
    switch ($age) {
        case 15:
            echo "You are 15 years old.";
            break;
        case 31:
            echo "You are 31 years old.";
            break;
        case 56:
            echo "You are 56 years old.";
            break;
        default:
            echo "You are weird.";
            break;
    }
}


?>
