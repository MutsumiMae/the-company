<?php

include "../classes/User.php";

session_start();
$uid = $_SESSION['user_id'];
$photo_name = $_FILES['photo']['name']; //the actual file nme "door.jpg"
$tmp_name = $_FILES['photo']['tmp_name']; //where the file id temporarily stored

$u = new User;
$u->uploadPhoto($uid, $photo_name, $tmp_name);








?>