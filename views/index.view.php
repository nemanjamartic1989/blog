
<?php require_once 'partials/top.php';?>

<nav class="navbar navbar-expand navbar-light bg-light">
	<a href="" class="navbar-brand">Blogger</a>
	<ul class="navbar-nav ml-auto">
		<?php if (isset($_SESSION['loggedUser'])): ?>
		<li class="nav-item">
			<a href="add_post.php" class="nav-link">Add Post</a>
		</li>
		<li class="nav-item">
			<a href="logout.php" class="nav-link">Logout</a>
		</li>
		<?php else: ?>
		<li class="nav-item">
			<a href="login_register.php" class="nav-link">Login / Register</a>
		</li>
		<?php endif; ?>
	</ul>
</nav>

<div class="jumbotron text-center">
	<h4>Blogger Posts</h4>
</div>

<?php require_once 'partials/bottom.php';?>
