<?php
session_start();

session_destroy();
header("Location:http://localhost/siperpus/login/index.php");//header setelaha location : tiboleh ada spasi
exit;
?>