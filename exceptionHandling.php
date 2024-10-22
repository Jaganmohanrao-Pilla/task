<?php
function divide($a,$b){
    try{
        if($b==0){
            throw new Exception("Division by zero",1);
        }
        echo "Result of $a/$b : " .$a/$b;
    }catch(Exception $e){
        echo "Error : ".$e->getMessage()."<br>";
        echo "code : ".$e->getCode();
    }
}
divide(10,0);

?>