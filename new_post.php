<?
require_once '/models/data.inc.php';
require_once '/models/post.inc.php';
$header = "$welcome, гость!";
$check = '';
$title = trim(strip_tags($_POST['title']));
$article = trim(strip_tags($_POST['article']));

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (empty($title) or empty($article)) {
			$check = 'Заполните все поля';
			} else {
				$post = new Post();
				$post = $post->addition($title, $article);
			header('Location: /');
		}
	}

require_once 'view/new_post.php';