<?php 

class User extends QueryBuilder
{
	public $register_result = NULL;
	public $loggedUser = NULL;

	public function registerUser()
	{
		$sql = "INSERT INTO users VALUES(NULL, ?, ?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([
			$_POST['register_name'], $_POST['register_email'], md5($_POST['register_password'])
		]);

		if ($query) {
			$this->register_result = true;
		}
	}

	public function logUser()
	{
		$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
		$query = $this->db->prepare($sql);
		$query->execute([$_POST['login_email'], md5($_POST['password'])]);
		$loggedUser = $query->fetch(PDO::FETCH_OBJ);

		if ($loggedUser != NULL) {
			$_SESSION['loggedUser'] = $loggedUser;
			$this->loggedUser = $loggedUser;
		}
	}
}