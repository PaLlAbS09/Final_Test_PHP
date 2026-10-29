<?php

setcookie("user", "pallab", time() + 3600, "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php

    
    if (isset($_COOKIE["user"])) {
      
        echo "<p style='color: green;'>Welcome, " . htmlspecialchars($_COOKIE["user"]) . "!</p>";
    } else {
        echo "<p style='color: red;'>Cookie is not set yet! Please refresh the page.</p>";
    }
    ?>
</body>
</html>