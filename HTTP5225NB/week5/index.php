<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $connect = mysqli_connect('localhost','root', 'password', 'http5225week5');
      if(!$connect) {
        echo 'Error Code: ' . mysqli_connect_errno();
        echo 'Error Message: ' . mysqli_connect_error();
        exit;
      }

      $query = 'SELECT `Name`, `Hex`, FROM colors';
      $results = mysqli_query($connect, $query);

      if(!$connectresults) {
        echo 'Error Message: ' .mysqli_error($connect);
      }else{
        echo 'Total records found: ' .mysqli_num_rows($results);
        
        foreach($results as $result) {
            echo '<h1>' . $result['Name'] . '</h1>';
            echo '<div stlye="height: 10px; width:100px; background:' . $result ['Hex'] . '"></div>'
        }

      };

    ?>
</body>
</html>