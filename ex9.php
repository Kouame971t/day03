<?php
if ($login === "admin" && $password === "1234") {
    echo "Login successful" . PHP_EOL;
    $logged = true;
} else {
    echo "Login failed" . PHP_EOL;
    $logged = false;
}
