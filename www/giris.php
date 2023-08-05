<?php
$id = "ogrenci123456@okul.edu.tr";
$pw = "ogrenci123456";
if (isset($_POST["id"]) and isset($_POST["pw"])) {
    if ($_POST["id"] == $id and $_POST["pw"] == $pw) {
        echo "Giriş başarılı ogrenci123456";
    }
    else {
        header("Location: giris.html");
        exit;
    }
}
else {
    http_response_code(400);
    echo "Hayır";
}
?>