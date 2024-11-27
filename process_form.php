<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

                                                                                                                                                       
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcoffee";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "<br>Database Connected successfully";
    



    function insert(){
        global $conn;
    
        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
    
        $query = "INSERT INTO users VALUES('', '$name', '$username', '$password', '$phone')";
        mysqli_query($conn, $query);
        echo "Inserted Successfully";
    }

$conn->close();
?>