<?php
require_once 'database/crud.php';
$board = $_POST['board_id'];
$name = $_POST['board_name'];
$email = $_POST['email'];
$number = $_POST['number'];
insert_order($board, $name, $email, $number);
header('Location: http://'.$_SERVER['HTTP_HOST'].'/boards'); exit;