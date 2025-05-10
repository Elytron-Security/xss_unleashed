<?php
    header('Content-Type: application/json');
    $user = $_GET['user_id'];
    $token = $_GET['token'];
    if ($user == "3663" && $token == "d8aea5b04b59ad8a36d1e2c10a77c426") {
         echo '{"data": {"token": "d8aea5b04b59ad8a36d1e2c10a77c426", "id": "1234", "password": "C4rc0s4"}, "user_id": 3663, "role": "admin"}';
        }
?>
