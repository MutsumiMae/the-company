<?php

include "../classes/User.php";

//date from the form
$l_name = $_POST['last_name'];
$f_name = $_POST['first_name'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$user = new User;
$user->register($f_name, $l_name, $username, $password);


?>