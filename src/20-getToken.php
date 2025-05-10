<?php
    header('Content-Type: application/json');
    $user = $_GET['user_id'];
    if ($user == "3663") {
         echo '{"params": {"token": "d8aea5b04b59ad8a36d1e2c10a77c426", "id": 1234}, "user_id": 3663, "role": "admin"}';
        }
?>
