<?php
// Функция для вычисления факториала числа
function factorial($n) {
    if ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Вычисление факториала числа 10 с использованием цикла
$result = 1;
for ($i = 1; $i <= 10; $i++) {
    $result *= $i;
}

echo "Факториал числа 10: " . factorial(10) . "\n";
echo "Факториал числа 10 с использованием цикла: " . $result . "\n";
?>