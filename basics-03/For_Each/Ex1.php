<?php // basics-03_For_Each_Ex1.php

$transactions = array(
    array(
        "id" => 1,
        "debit" => 2,
        "credit" => 3
    ),
    array(
        "id" => 2,
        "debit" => 15,
        "credit" => 10
    ),
    array(
        "id" => 3,
        "debit" => 30,
        "credit" => 10
    )
);

foreach ($transactions as $value) {
    $amount = abs($value['debit'] - $value['credit']);
    echo "ID:&nbsp" . $value['id'] . " => amount: $amount<br>";
}