<?php
/*Write a program to run from 1 to 20,000 and only prints numbers which are only divided by 7.*/
// method one: 
    for ($i=1; $i<=20000; $i++){ 
        if ($i%7==0){
            echo $i."<br/>";
        }
    }
    
// method two:
    for($i=1; $i<20000; $i=$i+7){
        echo $i."<br/>";
    }
?>
