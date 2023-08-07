<?php
if (isset($_POST["name"]) and isset($_POST["email"]) and isset($_POST["message"])) {
    echo $_POST["name"]."<br>".$_POST["email"]."<br>".$_POST["message"];
}
else {
    http_response_code(400);
    echo "Hayır";
}
?>