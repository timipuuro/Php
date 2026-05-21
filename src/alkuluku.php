<?php
if ($_POST) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = filter_var($_POST['number1'], FILTER_VALIDATE_INT);
    $number2 = filter_var($_POST['number2'], FILTER_VALIDATE_INT);
    $operation = $_POST['operation'];

    if ($operation == "plus") {
        $result = $number1 + $number2;
    } elseif ($operation == "minus") {
        $result = $number1 - $number2;
    } elseif ($operation == "multiply") {
        $result = $number1 * $number2;
    } elseif ($operation == "divide") {
        if ($number2 != 0) {
            $result = $number1 / $number2;
        } else {
            echo "Error: Division by zero is not allowed.";
            exit;
        }
    } else {
        echo "Invalid operation.";
        exit;
    }

    echo "Result: " . $result;       
    }

    }

?>