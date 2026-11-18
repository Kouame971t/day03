<?php
if (($value % 2 === 1 && $value > 10 && $value < 20) || $value === 42) {
    echo "Correct value" . PHP_EOL;
} else {
    echo "Incorrect value" . PHP_EOL;
}
