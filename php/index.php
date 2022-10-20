<?php


function add(){

}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Define Database Variables
    $server = "localhost";
    $user   = "ZFIXERS";
    $passwd = "";
    $db     = "orders";
    // Define User Variables
    $CC     = rand(1 , 1000000);
    $name   = $_POST['name'];
    $number = $_POST['phone-number'];
    $email  = $_POST['email'];
    $addr   = $_POST['address'];
    $type   = $_POST['type'];
    $msg    = $_POST['message'];

    $conn = new mysqli($server , $user , $passwd , $db);

    $conn->query("INSERT INTO `clients` (
        CC,
        Name,
        Email,
        `Phone Number`,
        Machine,
        Address,
        `Problem Description`
        ) VALUES (
            \"$CC\",
            \"$name\",
            \"$email\",
            \"$number\",
            \"$type\",
            \"$addr\",
            \"$msg\");"
        );
} else {
    header("location:http://localhost:8080/");
}

?>