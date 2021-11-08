<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body >
<?php  $name="Elnaz";
$age="37";
$jobTitle="programmer";
echo "<h1> Hi, my name is $name and i am $age and i work as a $jobTitle<h1>";  

$names = array('Mark','John','Georg','Lisa');
echo "the third player in the team is " . $names[2]."<br>"."<br>";



$carcharacters=["MickeyMouse"=>"MinnieMouse", "SuperMarioen"=>" Luigi", "Goku"=>"vegeta", "Pokemon"=>"pikachu"];


echo "Mickey Mouses friend is: ". $carcharacters["MickeyMouse"]."<br>";
echo "Super Marioens friend is: ". $carcharacters["SuperMarioen"]."<br>";
echo "Gokus friend is: ". $carcharacters["Goku"]."<br>";


$carcharacters=[
    "infos"=>["name"=>"MickeyMouse","age"=>"20","city"=>"Berlin"], 
 ];

echo $carcharacters["infos"]["name"]."<br>";
echo $carcharacters["infos"]["age"];

?>
</body>
</html>