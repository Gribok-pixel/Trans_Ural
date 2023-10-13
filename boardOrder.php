<?php
require_once 'database/crud.php';
$board = $_POST['board_id'];
$name = $_POST['board_name'];
$email = $_POST['email'];
$number = $_POST['number'];
insert_order($board, $name, $email, $number);
header('Location: http://wooden-store/boards'); exit;