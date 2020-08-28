<?php
if($_POST["message"]) {
    mail("your@email.address",  $_POST["name"], $_POST["message"], $_POST["email"]);
}
?>