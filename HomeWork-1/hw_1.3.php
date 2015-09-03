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
