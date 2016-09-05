<?php

$mysqli = new mysqli('localhost', 'scheme', 'user', 'secret');
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
