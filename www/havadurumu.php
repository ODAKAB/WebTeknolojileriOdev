<?php
$API_KEY = "";
header('Content-Type: application/json');
echo file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=Harare&appid=".$API_KEY);
?>