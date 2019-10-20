<?php

$cod = isset($_REQUEST['code']) ? $_REQUEST['code']:null;
$symbol = isset($_REQUEST['symbol']) ? $_REQUEST['symbol']:null;
$rate = isset($_REQUEST['rate']) ? $_REQUEST['rate']:null;
$description = isset($_REQUEST['description']) ? $_REQUEST['description']:null;
$rate_float = isset($_REQUEST['rate_float']) ? $_REQUEST['rate_float']:null;

//db configuration
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "bitcoin";
$con = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//Escape to sanitize inputs
$cod = mysqli_real_escape_string($con, $cod);
$symbol = mysqli_real_escape_string($con, $symbol);
$rate = mysqli_real_escape_string($con, $rate);
$description = mysqli_real_escape_string($con, $description);
$rate_float = mysqli_real_escape_string($con, $rate_float);

//Example database table
/*
CREATE TABLE bitcoinprices(
	cod varchar(3),
    symbol varchar(20),
    rate varchar(20),
    description varchar(50),
    rate_float float(10,4)
);
*/

$sql = "INSERT INTO bitcoinprices (cod, symbol, rate, description, rate_float)
        VALUES ('".$cod."', '".$symbol."', '".$rate."', '".$description."', ".$rate_float." )";

if ($con->query($sql) === TRUE) {
    echo "OK";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>