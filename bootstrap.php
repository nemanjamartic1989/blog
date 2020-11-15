<?php 
session_start();

define ("CLASS_ROOT", 'classes/');

$config = require('config.php');

function __autoload($className) {
	require_once CLASS_ROOT.str_replace('_', '/', $className).'.php';
}

$db = Connection::connect($config);

$query = new QueryBuilder($db);
$user = new User($db);
$post = new Post($db);
