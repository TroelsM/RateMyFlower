<?php
session_start();

$DB_HOST = 'troelsm.com.mysql';
$DB_USER = 'troelsm_com';
$DB_PASS = 'JdySGyTF';
$DB_NAME = 'troelsm_com';

$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($link->connect_error) {
    die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8');

require 'functions.php';
?>
