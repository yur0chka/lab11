<?php
if(isset($_GET['x']) && isset($_GET['y']) && isset($_GET['operation'])){
    $x = $_GET['x'];
    $y = $_GET['y'];
    $operation = $_GET['operation'];
    
    switch ($operation) {
        case "add":
            $result = $x + $y;
            break;
        case "subtract":
            $result = $x - $y;
            break;
        case "multiply":
            $result = $x * $y;
            break;
        case "divide":
            if ($y != 0) {
                $result = $x / $y;
            } else {
                $result = "Помилка: Ділення на нуль.";
            }
            break;
        default:
            $result = "Невідома операція.";
    }
    
    echo "Результат: $result";
} else {
    echo "Помилка: Введені дані неправильні або відсутні.";
}
?>
