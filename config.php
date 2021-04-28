<?php
session_start();

//connect database
$conn = mysqli_connect("localhost", "root", "", "mysimpleblog");

if (!$conn) {
    die("error connecting to database: " . mysqli_connect_error());
}

// define global constants
define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/complete-blog-php/');
