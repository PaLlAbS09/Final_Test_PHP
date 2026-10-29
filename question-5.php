<?php
$host = 'localhost';
$dbname = 'final_exam';
$user = 'root';
$pass = '';

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
    $name = "Pracheta";
    $email = "pracheta@gmail.com";
    $name = "Ajinkya";
    $email = "ajinkya@gmail.com";


    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        echo "New record created successfully.";
    }

} catch (PDOException $e) {
    die("Database Connection Failed or Query Error: " . $e->getMessage());
}
?>