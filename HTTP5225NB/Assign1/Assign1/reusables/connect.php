<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'earthquake');
if (!$connect) {
    die("Connection Failed: " . mysqli_connect_error());
}

