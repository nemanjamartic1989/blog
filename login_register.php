<?php 

require_once 'bootstrap.php';

if (isset($_POST['registerBtn'])) {
	$user->registerUser();
}

require_once 'views/login.register.view.php';