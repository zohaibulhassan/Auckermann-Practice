<?php

function ackermannNonRecursive($level, $number) {
    $stack = [];
    array_push($stack, [$level, $number]);

    while (!empty($stack)) {
        [$currentLevel, $currentNumber] = array_pop($stack);

        if ($currentLevel == 0) {
            $currentNumber += 1;
        } elseif ($currentNumber == 0) {
            array_push($stack, [$currentLevel - 1, 1]);
        } else {
            array_push($stack, [$currentLevel - 1, null]);
            array_push($stack, [$currentLevel, $currentNumber - 1]);
        }
        if (!empty($stack) && $stack[count($stack) - 1][1] === null) {
            $stack[count($stack) - 1][1] = $currentNumber;
        }
    }

    return $currentNumber;
}

$ackermannLevel = 3;
$ackermannNumber = 4;
$result = ackermannNonRecursive($ackermannLevel, $ackermannNumber);
echo "Ackermann($ackermannLevel, $ackermannNumber) = $result\n";

?>
