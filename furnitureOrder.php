<?php
require_once 'database/crud.php';
$furniture = $_POST['furniture_id'];
$name = $_POST['furniture_name'];
$email = $_POST['email'];
$number = $_POST['number'];

insert_orderFurniture($furniture, $name, $email, $number);
header('Location: http://'.$_SERVER['HTTP_HOST'].'/furniture');