<?
require_once '/models/post.inc.php';
$id = trim(strip_tags($_POST['id']));

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$post = new Post();
		$post = $post->delete($id);
		header('Location: /');
	}