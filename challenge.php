<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body >
<?php  

$CarRentalAgency=[
    "infosCar1"=>["availability "=>true ,"model"=>"BMW","price"=>4500, "location"=> "1.Bezirk" ],
    "infosCar2"=>["availability "=>false ,"model"=>"Benz","price"=>3500, "location"=> "2.Bezirk"],
    "infosCar3"=>["availability "=>true ,"model"=>"Bugatti","price"=>5500, "location"=> "3.Bezirk"],
    ];



  echo " 
<div class='card-group'>
  <div class='card'>
  <img src='https://www.bmwgroup.com/content/dam/grpw/websites/bmwgroup_com/brands/einstiegsseite/1280x854_P90351044_highRes_the-new-bmw-8-series.jpg' class='card-img-top'>
    <div class='card-body'>
    <h1 class='card-title'>"."Info Car 1:"."</h1>
    <h5 class='card-title'>"." Model :".$CarRentalAgency["infosCar1"]["model"]."</h5>
    <h5 class='card-title'>"."Price:".$CarRentalAgency["infosCar1"]["price"]."</h5>
    <h5 class='card-text'> "."Location:".$CarRentalAgency["infosCar1"]["location"]."</h5>
    </div>
  </div>
  <div class='card'>
  <img src='https://www.mercedes-benz.com/de/fahrzeuge/personenwagen/konzeptfahrzeuge/_jcr_content/image/MQ6-12-image-20200908114040/00-mercedes-benz-eq-konzeptfahrzeuge-2560x1440.jpeg' class='card-img-top'>
    <div class='card-body'>
    <h1 class='card-title'>"."Info Car 2:"."</h1>
    <h5 class='card-title'>"." Model :".$CarRentalAgency["infosCar2"]["model"]."</h5>
    <h5 class='card-title'>"."Price:".$CarRentalAgency["infosCar2"]["price"]."</h5>
    <h5 class='card-text'> "."Location:".$CarRentalAgency["infosCar2"]["location"]."</h5>
    </div>
  </div>
  <div class='card'>
  <img src='https://www.partner.bugatti/fileadmin/_processed_/3/3/csm_BUGATTI-PARTNER_f7bb5213bf.png' class='card-img-top'>
    <div class='card-body'>
    <h1 class='card-title'>"."Info Car 3:"."</h1>
    <h5 class='card-title'>"." Model :".$CarRentalAgency["infosCar3"]["model"]."</h5>
    <h5 class='card-title'>"."Price:".$CarRentalAgency["infosCar3"]["price"]."</h5>
    <h5 class='card-text'> "."Location:".$CarRentalAgency["infosCar3"]["location"]."</h5>
    </div>
  </div>
</div> ";





#echo CarRentalAgency["infoCar1"]["model"];

?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

