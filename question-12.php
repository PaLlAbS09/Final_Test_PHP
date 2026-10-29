<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $submittedName = htmlspecialchars($_POST['name']);
    $submittedEmail = htmlspecialchars($_POST['userEmail']);
    echo " Success: Data  received!</p>";
}
?>


<form id="myForm" action="" method="POST">
    <input type="text" name="name" placeholder="Enter your name">
    <input type ="email" name="userEmail" placeholder="Enter email">
    <button id="myButton">Submit</button>
</form>



<script>
$(document).ready(function() {
    $('#myButton').click(function(event) {
        event.preventDefault(); 
        $('#myForm').submit(); 
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>