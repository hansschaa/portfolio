<?php
if($_POST["message"]) {
    mail("hansschaadev@gmail.com",  $_POST["name"], $_POST["message"], $_POST["email"]);
}
?>