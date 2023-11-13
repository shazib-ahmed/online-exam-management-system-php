<?php

$host = "localhost";
$user = "onlineExaminationPhp";
$pass = "onlineExaminationPhp";
$db   = "onlineExaminationPhp";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};", $user, $pass);
} catch (Exception $e) {
}
