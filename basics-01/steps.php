<?php // #basics-01_step1.php 
echo "Hello world, Help me I am using PHP";
echo "\n";
?>
<?php // #basics-01_step2.php
echo "I am getting errors but I can't see the errors";
echo "\n";
?>
<?php
print "Search on how to enable PHP Errors";
echo "\n";
?>
<?php // #basics-01_step3.php
$name= "Ziko";
$email= "zakaria.bashir98@gmail.com";
$height= 183;
$width= 69;
$area= $height*$width;
echo "My name is " .$name. " and my email is " .$email;
echo "\n";
echo "My area value is " .$area;
echo "\n";
?>
<?php // #basics-01_step4.php
$name= "Ziko";
$position= "Full-snack developer";
$github_url= "https://github.com/ZakariaBashir";
$myString= "Hello, I'm " .$name.", I'm a " .$position. " please check my github link " .$github_url;
echo "Hello, I'm " .$name.", I'm a " .$position. " please check my github link " .$github_url;
echo "\n";
echo "Hello, I'm {$name}, I'm a {$position} please check my github link {$github_url}";
echo "\n";
echo $myString;
echo "\n";
?>

<?php // #basics-01_Step5.php
$course_name= "PHP";
$enrolled_students= 37;
$price= 30;
$on_discount= FALSE;
echo "Course title: ".$course_name. ", the language of no bugs.";
echo "\n";
echo "Enrolled Students: ".$enrolled_students;
echo "\n";
echo "Course price: ".$price. "$ USD";
echo "\n";
echo "Course on discount: ";
if($on_discount == TRUE){
    echo "Yes";
}else{echo "No";}
echo "\n";
?>

<?php // #basics-01_Step6.php
function calculateArea($height, $width){
        echo "Area is ".$heaght * $width;}
        echo calculateArea(5, 3);
?>

<?php // #basics-01_Step7.php
$birth_year= 3000;
$current_year= 2022;
if($current_year - $birth_year >18){
    echo "You can drive";
}else{echo "You still a kid, go and play GTA";}
echo "\n";
?>

<?php // #basics-01_Step8_a.php
$Array= array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
echo "Hello Sir, do you have " .$Array[0]. ", " .$Array[1]. " and " .$Array[2]. "? Also if you sell fruits can I find a " .$Array[5]. "?";
echo "\n";
?>

<?php // Step8_b.php
$myArray= array(array('balade', 'mazere3'), array('Fresh', 'Taanayel'), array('Tanoureen', 'Reem'));
echo "Hey Sir, Please I need 1 pack of " .$myArray[0][0]. " eggs and 3 " .$myArray[2][1]. " Water Pack.";
echo "\n";
echo "Hey Sir, Please I need 1 pack of " .$myArray[0][0]. " " .$Array[0]. " and 3 " .$myArray[2][1]. " ".$Array[3]. ".";
echo "\n";
?>

<?php // #basics-01_Step9.php
$name= "Zackaria";
$nickName="Zack";

var_dump($name);
var_dump($nickName);
?>