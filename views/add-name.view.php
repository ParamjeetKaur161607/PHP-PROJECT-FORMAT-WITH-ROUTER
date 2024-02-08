<?php

var_dump($_SERVER['REQUEST_METHOD']);
$database->insert('table1',[
    'username'=> $_POST['username'],
    'password'=> $_POST['password'],
]);