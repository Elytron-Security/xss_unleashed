<?php
    header('Content-Type: application/json');
    $user = $_GET['user_id'];
    $token = $_GET['token'];
    if ($user == "3663" && $token == "d8aea5b04b59ad8a36d1e2c10a77c426") {
         echo '{"card_1": "5482 7493 4525 2249", "card_2": "4929 8532 0423 7111", "card_3": "6011 6782 2374 4837"}';
        }
?>
