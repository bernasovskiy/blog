<?
require_once '/models/data.inc.php';
require_once '/models/post.inc.php';
$header = "$welcome, гость!";

$title = trim(strip_tags($_POST['title']));
$article = trim(strip_tags($_POST['article']));

	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET':
			$id = trim(strip_tags($_GET['id']));
			$post = new Post();
			$post = $post->get_one($id);
			break;
		case 'POST':
			$id = trim(strip_tags($_POST['id']));
			$post = new Post();
			$post = $post->update($title, $article, $id);
			header("Location: http://localhost/post.php?id=$id");
			break;
	}

require_once 'view/update.php';