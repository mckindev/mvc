<?php 
    class Database extends PDO
    {
        public function __construct()
        {
            $conn = 'mysql:dbname=cart;host=localhost';
            $user = 'root';
            $pass = '';
            parent::__construct($conn,$user,$pass);
        }
    }
?>