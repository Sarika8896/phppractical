<?php
// Delete the cookie
setcookie("username", "", time() - 20);
header("Location: index.php");
exit();
?>
