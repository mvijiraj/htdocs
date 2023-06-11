<?php   
echo 'This is a collection of a page'."<br>"."<br>"."<br>";

$firstname=$_POST{"fname"};
echo $firstname."<br>";
$laststname=$_POST{"lname"};
echo $laststname."<br>";
$gender=$_POST{"Gender"};
echo $gender."<br>";
$bdate=$_POST{"dob"};
echo $bdate."<br>";
$btime=$_POST{"dobtime"};
echo $btime."<br>";
$bdatetime=$_POST{"dobdatetime"};
echo $bdatetime."<br>";
if(isset($_POST{"card"})){
    $card=$_POST["card"];
    echo $card."<br>";
}
if(isset($_POST{"cash"})){
    $cash=$_POST["cash"];
    echo $cash."<br>";
}
$address=$_POST{"Address"};
echo $address."<br>";
$city=$_POST{"city"};
echo $city."<br>";
$pword=$_POST{"pword"};
echo $pword;

?>