<?php
function calculateAckermann($level, $number) {
    if ($level == 0) {
        return $number + 1;
    }
    if ($level > 0 && $number == 0) {
        return calculateAckermann($level - 1, 1);
    }
    if ($level > 0 && $number > 0) {
        return calculateAckermann($level - 1, calculateAckermann($level, $number - 1));
    }
}

$ackermannLevel = 3;
$ackermannNumber = 4;

$ackermannResult = calculateAckermann($ackermannLevel, $ackermannNumber);
echo "Ackermann($ackermannLevel, $ackermannNumber) = $ackermannResult\n";
?>
