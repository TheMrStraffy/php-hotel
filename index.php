<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>Document</title>
</head>
<body>
  <div class="container">

  <h1>Hotel</h1>
  
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">Vote</th>
      <th scope="col">Distance to Center</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($hotels as $value) {
    if($value['parking'] == false){
      $value['parking'] = 'no';
    } else{
      $value['parking'] = 'yes';
    };
    echo '<tr>
    <td scope="col"> '. $value['name'] .'  </td>
      <td scope="col"> '. $value['description'] .'</td>
      <td scope="col"> '. $value['parking'] .'</td>
      <td scope="col"> '. $value['vote'] .'</td>
      <td scope="col"> '. $value['distance_to_center'] .'</td>
    </tr>';
  }
  ?>
    <!-- <tr>
    <td scope="col">Name</td>
      <td scope="col">Description</td>
      <td scope="col">Parking</td>
      <td scope="col">Vote</td>
      <td scope="col">Distance to Center</td>
    </tr> -->
    
  </tbody>
</table>

 
  </div>
</body>
</html>