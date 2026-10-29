<?php
$host = 'localhost';
$dbname = 'final_exam';
$user = 'root';
$pass = '';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM users WHERE name LIKE 'A%' ORDER BY id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();


    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if ($results) {
        foreach ($results as $userRecord) {
            echo "Name: " . htmlspecialchars($userRecord['name']) . "<br>";
        }
    } else {
        echo "No users found starting with 'A'.";
    }
} catch (PDOException $e) {
    die("Database Connection Failed or Query Error: " . $e->getMessage());
}
