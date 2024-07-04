<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earthquake_Percipition_Data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 mt-5 mb-5">Earthquake_Perception_Data</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    require ('reusables/connect.php');
    // Join query to get data from both tables
    $query = '
    SELECT 
        e.*, 
        u.name, 
        u.email, 
        u.phone, 
        ev.event_name, 
        ev.event_date, 
        ev.location
    FROM 
        earthquake_perception_dataset e
    JOIN 
        user_details u ON e.user_id = u.user_id
    JOIN 
        events ev ON e.event_id = ev.event_id
    ';
    $earthquake_perception_dataset = mysqli_query($connect, $query);
    ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <?php
                foreach ($earthquake_perception_dataset as $data) {
                    echo '<div class="col-md-4 mt-2 mb-2">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-text
                      ">Age: ' . $data['age'] . '</h5>
                      <p class="card-text">Sex: ' . $data['sex'] . '</p>
                      <p class="card-text">Marital Status: ' . $data['marital_status'] . '</p>
                      <p class="card-text">Residence: ' . $data['residence'] . '</p>
                      <p class="card-text">Education: ' . $data['education'] . '</p>
                      <p class="card-text">Occupation: ' . $data['occupation'] . '</p>
                      <p class="card-text">Out of Region Employment: ' . $data['out_of_region_employment'] . '</p>
                      <p class="card-text">Family Members: ' . $data['family_members'] . '</p>
                      <p class="card-text">Family Disabilities: ' . $data['family_disabilities'] . '</p>
                      <p class="card-text">House Floor: ' . $data['house_floor'] . '</p>
                      <p class="card-text">Earthquake 80: ' . $data['earthquake80'] . '</p>
                      <p class="card-text">Political Orientation: ' . $data['political_orientation'] . '</p>
                      <p class="card-text">Shocks: ' . $data['shocks'] . '</p>
                      <p class="card-text">Fear: ' . $data['fear'] . '</p>
                      <p class="card-text">Anxiety: ' . $data['anxiety'] . '</p>
                      
                    </div>
                  </div>
                </div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>