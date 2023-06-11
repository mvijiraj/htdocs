<?php 
//echo "This is a Demo function on php .<br>";

//myAddress();
//myAddress();

//$myAns=addNum(5,8);
//echo 'My answer is'.$myAns;
//echo '<br>';
//addNum(5,8);

//$myAge=myAge();
//echo $myAge;


printfullname("Marimuthu","Vijayaragavan",50);
echo"<br>";
printfullname("Marimuthu","Vijayaragavan",50);
//1. no arg and no return
function myaddress() {
  //  echo "Vijayaragavan";
   // echo " 50 A,";
    //echo " Rosary Road";
    //echo " Negombo";
   //echo " <br>";

}

//getmyFullname();
//echo '<br>';
//getmyFullname();
function getmyFullname(){
    echo " Marimuthu Vijayaragavan";
}

//2. Arg return function
function addNum($num1,$num2){

$ans=$num1+$num2;
echo $ans;
return $ans;

}
//4. No arg - return
function myAge(){
    $ag=35;
    return $ag;
}
//3.arg no return
function printfullname($fname,$lname,$ag){
    $fullname=$fname. ' ' .$lname . ' ' .$ag;
    echo $fullname;

}
?>