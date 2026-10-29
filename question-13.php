<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']); 
    
    echo "Success: Received data for " . $username . " with email " . $email;
    
    exit; 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
  
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <input type="text" id="username" placeholder="Enter username">
    <input type="email" id="email" placeholder="Enter email">

    <button id="ajaxButton">Send</button>

    <script>
  
    $(document).ready(function() {
        $('#ajaxButton').click(function() {
            
           
            let inputUsername = $('#username').val();
            let inputEmail = $('#email').val();

        
            $.ajax({
                url: '', 
                type: 'POST',
                data: { 
                    username: inputUsername, 
                    email: inputEmail 
                },
                success: function(response) {
                    console.log("Server responded: ", response);
                    alert(response);
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + error);
                }
            });
            
        });
    });
    </script>
</body>
</html>