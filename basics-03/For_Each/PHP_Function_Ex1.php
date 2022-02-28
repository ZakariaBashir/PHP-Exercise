<?php // basics-03_For_Each/PHP_Function_Ex1.php

$personal_details=array("name" => "Rajesh Rao", "occupation" => "Engineer", "age" => 39, "country" => "India");


function show_personal_data($personal_details){
    foreach ( $personal_details as $key => $value )
    {
    echo "$key=$value\n";
    }
}

show_personal_data($personal_details);