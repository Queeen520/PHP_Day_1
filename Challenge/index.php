<?php 
$cars = array(
    "suv" => array(
            "name" => "Kia Sportage",
            "price" => 45.000,
            "location" => "Vienna Rental",
            "img" => "https://www.kia.com/content/dam/kwcms/kme/global/en/assets/vehicles/sportage/discover/kia-sportage-my21-gtl-sidesill-trim.png"
    ),

    "pkw" => array(
            "name" => "Seat Ibiza Xcellence",
            "price" => 20.000,
            "location" => "Graz Rental",
            "img" => "https://cdn.seat.at/media/PoiTools_Kwc_Model_Variant_Image_Component/24661-model-4505-image/dh-787-83f0a5/a9839fd5/1657003552/xcellence-ibiza-oe.png"
    ),

    "range_rover" => array(
                "name" => "Range Rover Sport S",
                "price" => 75.000,
                "location" => "Vienna Rental",
                "img" => "https://www.landrover.at/content/dam/landrover/global/vehicles/range-rover-sport/23my/L461_23MY_025_GLHD.jpg.res/JLRHASH-1666620558349-TS/L461_23MY_025_GLHD.jpg"
    )
);

$availability = array(
    "yes" => "Available",
    "no" => "Not Available"
)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<!-- BEGINNING OF THE NAVBAR -->
<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://t3.ftcdn.net/jpg/01/71/13/24/360_F_171132449_uK0OO5XHrjjaqx5JUbJOIoCC3GZP84Mt.jpg" 
      alt="Logo" width="42" height="30" class="d-inline-block align-text-top">
      CAR RENTAL
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END OF THE NAVBAR -->

<!-- BEGINNING OF THE CONTAINER WITH CARDS -->
<?php

echo 
"<div class='container'>
<div class='row row-cols-1 row-cols-md-3 g-4'>
  <div class='col'>
    <div class='card'>
      <img src="$cars["suv"]["img"]" class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>"$cars["suv"]["name"]"</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
</div>
</div>";

?>
<!-- END OF THE CONTAINER WITH CARDS -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>