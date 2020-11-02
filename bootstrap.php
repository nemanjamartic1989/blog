<?php 

$config = require('config.php');

require('classes/Connection.php');

$db = Connection::connect($config);

require("classes/QueryBuilder.php");

$query = new QueryBuilder($db);
