<?php
$link = mysqli_connect("localhost", "root", "", "", "3307");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

//==================================
$sql = "CREATE DATABASE UBung";

if (mysqli_query($link, $sql)) {
    echo "Database UBung created successfully\n";
} else {
    echo 'Error creating database: ' . mysqli_error($link) . "\n";
}

mysqli_select_db($link, "UBung") or die(mysqli_connect_error());

//==================================User
$sql = "CREATE TABLE User (
    Id INT AUTO_INCREMENT, 
    UserName VARCHAR(100), 
    Password VARCHAR(100), 
    Address  VARCHAR(200),
    Phone VARCHAR(15), 
    Email VARCHAR(100), 
    Role VARCHAR(10), 
    Status BOOLEAN, 
    PRIMARY KEY(Id))";


if (mysqli_query($link, $sql)) {
    echo "Table User created successfully\n";
} else {
    echo 'Error creating table: ' . mysqli_error($link) . "\n";
}

//==================================Service
$sql = "CREATE TABLE Service (
    Id INT AUTO_INCREMENT, 
    Name VARCHAR(100), 
    PRIMARY KEY(Id))";


if (mysqli_query($link, $sql)) {
    echo "Table Service created successfully\n";
} else {
    echo 'Error creating table: ' . mysqli_error($link) . "\n";
}

//==================================Voucher
$sql = "CREATE TABLE Voucher(
    Id INT AUTO_INCREMENT, 
    UserId INT NOT NULL,
	OrderId INT NOT NULL,
    PRIMARY KEY(Id),
	FOREIGN KEY(UserId) REFERENCES User(UserId),
	FOREIGN KEY(OrderId) REFERENCES Order(OrderId))";


if (mysqli_query($link, $sql)) {
    echo "Table Voucher created successfully\n";
} else {
    echo 'Error creating table: ' . mysqli_error($link) . "\n";
}

//==================================Anouncement
$sql = "CREATE TABLE Voucher (
    Id INT AUTO_INCREMENT, 
    Title VARCHAR(100),
	Description VARCHAR(500))";


if (mysqli_query($link, $sql)) {
    echo "Table Anouncement created successfully\n";
} else {
    echo 'Error creating table: ' . mysqli_error($link) . "\n";
}
//Please continue adding your tables' scripts here





//And finally we close the connection to the MySQL server
mysqli_close($link);
?>
