<?
require_once '/models/data.inc.php';
require_once '/models/post.inc.php';
$header = "$welcome, гость!";
$user = trim(strip_tags($_POST['login']));
$id = trim(strip_tags($_GET['id']));
	if (!empty($id)){
		$post = new Post();
		$post = $post->get_one($id);
		} else {
			header('Location: /');
			}

require_once 'view/post.php';