<?php
if(isset($_POST['username'])) {
    $name = $_POST['username'];

    
    setcookie("username", $name, time() + (120));

   
    header("Location: index.php");
    exit();
} else {
    echo "Please enter a name.";
}
?>
