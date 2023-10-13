<?php


include_once 'database/connect.php';


// INSERT
function insert($name, $price, $width, $height, $length)
{
    global $pdo;
    $sql = "INSERT INTO `board_catalog`(`name`, `price`, `width`, `height`, `length`) VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($name, $price, $width, $height, $length));
}


// SELECT
function select($id)
{
    global $pdo;
    $sql = "SELECT `name`, `population` FROM `cities` WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));
    echo "<pre>";
    print_r($stmt->fetchAll());
    echo "</pre>";
}


//DELETE
function delete($id)
{
    global $pdo;
    $sql = "DELETE FROM `cities` WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));
}