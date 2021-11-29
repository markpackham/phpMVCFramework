<?php

// Databse params
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "phpmvcframework");

// shows something like
//C:\xampp\htdocs\phpMVCFramework\app\config\config.php
// echo __FILE__;
// //C:\xampp\htdocs\phpMVCFramework\app\config
// echo dirname(__FILE__);

// APPROOT
define("APPROOT", dirname(dirname(__FILE__)));

// URLROOT for dynamic links
define("URLROOT", "http://localhost/phpMVCFramework");

// Sitename
define("SITENAME", "PHP MVC Framework");
