<?php
    session_start();
?>
<!DOCTYPE.html>
<html>
    <body>
        <h2>WELCOME <?php echo $_SESSION['username'];?> </h2>
        <a href="logout.php">LOGOUT</a>
</body>   
</html>