<?php
if ($age < 3) {
    $stage = "Baby";
    $type = $animal === "Cat" ? "Kitten" : "Puppy";
} else {
    $stage = $age <= 8 ? "Adult" : "Senior";
    $type = $animal;
}

echo "$stage $type" . PHP_EOL;
