<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week-2</title>
</head>

<body>

    <?php echo "<h1>Welcome to HTTP5225</h1>"; ?>
    <?php echo '<p>Let"s learn together</p>'; ?>
    <?php echo ' <ul>
        <li>PHP</li>
        <li>Laravel</li>
    </ul>'; ?>

    <?php
    echo '<img src="https://media.npr.org/assets/img/2015/03/03/overly_custom-dd57085dc9a9e7e18a9ddf242ee8b4aa0c84c764.jpg?s=600&c=85&f=webp" alt=""> ';
    ?>

    <img src="<?php echo 'https://media.npr.org/assets/img/2015/03/03/overly_custom-dd57085dc9a9e7e18a9ddf242ee8b4aa0c84c764.jpg?s=600&c=85&f=webp'; ?>"
        alt="">

    <?php
    $fname = 'Reddy';
    $lname = 'Nagendra';

    $name['fname'] = 'Reddy';
    $name['lname'] = 'Nagenda';

    //$name = array('Reddy'. 'Nagendra');
    //$name[0];
    
    echo 'Hello ' . $fname . ' ' . $lname;
    ?>
</body>

</html>