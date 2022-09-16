<?php
session_unset();
session_destroy();


if(count($_COOKIE) > 0) {
setcookie("uname","", time() - (86400 * 30), "/");
setcookie("post","", time() - (86400 * 30), "/");
}

header("location: ../View/index.html");
?>