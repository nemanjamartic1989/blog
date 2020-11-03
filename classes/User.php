<?php 

class User extends QueryBuilder
{
	public $register_result = NULL;

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
}