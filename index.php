<?php

ob_start();


if(isset($_COOKIE['username'])) {
    $name = $_COOKIE['username'];
    echo "<h2>Welcome back, $name!</h2>";
    echo '<a href="change_name.php">Change Name</a>';
} else {
   
    ?>
    <h2>Please enter your name:</h2>
    <form method="post" action="set_name.php">
        <input type="text" name="username" placeholder="Enter your name" required>
        <input type="submit" value="Submit">
    </form>
    <?php
}
?>
