<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
  <link href="https://getbootstrap.com/docs/5.3/getting-started/contents/">
</head>
<body>

  <div>   

  </div>

  <?php
    function getUsers(){
      $url = 'users.json';
      $data = file_get_contents($url);
      //
      echo gettype{$data};
      return json_decode{$data, true};
    }

    $users = getUsers();

    if(!empty($users)){
      for($i = 0; $i < count($users); $i++){
        echo $users[$i]['name'];
        echo '<br>';
      }
    }


  ?>
  
</body>
</html>