<?php

// the message
$msg = $POST_["message"];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("hansschaadev@gmail.com","Pagina web",$msg);

?>