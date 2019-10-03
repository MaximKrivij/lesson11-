<?php
error_reporting(E_ALL);
require_once 'Users.php';

$user = new Users('Name', '2000-05-25', 'worker', 1000);

$objectStr = serialize($user);

print_r($objectStr);

echo'<br>----------------------------<br>';

$userSerialised = unserialize($objectStr, ['allowed_classes' => ['Users']]);

print_r($userSerialised);