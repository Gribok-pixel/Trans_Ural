<?php
require_once 'connect.php';

//SELECT ALL
function selectAll() {
    global $pdo;
    $sql = "SELECT * FROM `board_catalog`";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}

// SELECT WITH LIMIT
function selectLimitBoard($num) {
    global $pdo;
    $sql = "SELECT * FROM `board_catalog` LIMIT $num";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}

// Select one
function select($id)
{
    global $pdo;
    $sql = "SELECT `id`, `name`, `price`, `width`, `height`, `length`, `image` FROM `board_catalog` WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));
    // echo "<pre>";
    // print_r($stmt->fetchAll());
    // echo "</pre>";
    $arr = $stmt->fetch();
    return $arr;
}

// INSERT 'boarder_order':
function insert_order($board_id, $board_name, $email, $number)
{
    global $pdo;
    $sql = "INSERT INTO `board_order`(`board_id`, `board_name`, `email`, `number`) VALUES (?, ?, ?, ?)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($board_id, $board_name, $email, $number));
}


//======================================================================================================================
//======================================================================================================================


//SELECT ALL
function selectAllFurniture() {
    global $pdo;
    $sql = "SELECT * FROM `furniture_catalog`";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}

// SELECT WITH LIMIT
function selectLimitFurniture() {
    global $pdo;
    $sql = "SELECT * FROM `furniture_catalog` LIMIT 3";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}

// Select one
function selectFurniture($id)
{
    global $pdo;
    $sql = "SELECT `id`, `name`, `price`, `old_price`, `length`, `width`, `height`, `image_one`, `image_two`, `image_three` FROM `furniture_catalog` WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));
    // echo "<pre>";
    // print_r($stmt->fetchAll());
    // echo "</pre>";
    $arr = $stmt->fetch();
    return $arr;
}

// INSERT 'boarder_order':
function insert_orderFurniture($furniture_id, $furniture_name, $email, $number)
{
    global $pdo;
    $sql = "INSERT INTO `furniture_order`(`furniture_id`, `furniture_name`, `email`, `number`) VALUES (?, ?, ?, ?)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($furniture_id, $furniture_name, $email, $number));
}
