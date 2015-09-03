
<?php
        $mark = 71;
        
        switch ($mark)
        {
            case ($mark <=0 || $mark >=100): 
                echo "Your input is invalid"; break;
            case ($mark >=91 && $mark <=100): 
                echo "Your Grade is : A"; break;
            case ($mark >=81 && $mark <=90): 
                echo "Your Grade is : B"; break;
            case ($mark >=71 && $mark <=80): 
                echo "Your Grade is : C"; break;
            case ($mark >=61 && $mark <=70): 
                echo "Your Grade is : D"; break;
            case ($mark == 60): 
                echo "Your have passed"; break;
            default :
                echo "You have failed"; 
        }
?>
    