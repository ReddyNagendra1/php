<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week3</title>
</head>
<body>
    <?php 
    //  $hour = date("H");
    //  echo $hour;
     
    $hour = rand(1, 24);
    echo $hour;
    
    if($hour >= 0 && $hour <= 12) {
        echo "Good Morning";
    }elseif($hour >= 12 && $hour <= 18) {
        echo "Good Afternoon";
    }else{
        echo"Good Night";
    }
        
    // $magicNumber = rand(1, 100);
    // echo $magicNumber;

    // if($magicNumber % 3) {
    //     echo "Fizz";
    // }elseif($magicNumber % 5){
    //     echo "Buzz";
    // }elseif($magicNumber % 3 && $magicNumber % 5){
    //     echo "FizzBuzz";
    // }else {
    //     echo "$magicNumber";
    // }

    
    $currentHour = date("G");
               
    ?>
</body>
</html>