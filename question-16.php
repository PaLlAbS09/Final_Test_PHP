<?php
$string = "Welcome to Webskitters Acadamy! ";
$newString = str_replace("Acadamy", "Academy", $string);

echo "<p style='color: Red;'>" . $string . "</p>";
echo "<br>";
echo "<p style='color: Green;'>" . $newString . "</p>"; 
?>