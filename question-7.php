<?php
class User {
    public $publicVar = "I am public";
    protected $protectedVar = "I am protected";
    private $privateVar = "I am private";

    public function printHello() {
        echo $this->publicVar;
        echo $this->protectedVar;
        echo $this->privateVar;
    }
}

$user = new User();
echo $user->publicVar; 
?>