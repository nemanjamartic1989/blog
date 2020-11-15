<?php 

require_once 'bootstrap.php';

$posts = $post->selectAll('posts');

require_once 'views/index.view.php';