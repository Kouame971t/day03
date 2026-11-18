<?php
$logged = ($login === "admin" && $password === "1234") ? true : false;

echo ($logged ? "Login successful" : "Login failed") . PHP_EOL;
