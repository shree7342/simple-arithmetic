<?php
require_once 'classes/ArithmeticOperations.php';

use MyLibrary\ArithmeticOperations;

header("Content-Type: application/json");

$operation = $_GET['operation'] ?? null;
$num1 = $_GET['num1'] ?? null;
$num2 = $_GET['num2'] ?? null;

$response = [];

if ($operation && $num1 && $num2) {
    $calculator = new ArithmeticOperations();

    switch ($operation) {
        case "add":
            $response['result'] = $calculator->add($num1, $num2);
            break;
        case "subtract":
            $response['result'] = $calculator->subtract($num1, $num2);
            break;
        case "multiply":
            $response['result'] = $calculator->multiply($num1, $num2);
            break;
        case "divide":
            $response['result'] = $calculator->divide($num1, $num2);
            break;
        default:
            $response['error'] = "Invalid operation";
            break;
    }
} else {
    $response['error'] = "Missing parameters";
}

echo json_encode($response);
?>
