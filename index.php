<?
require_once '/models/data.inc.php';
require_once '/models/post.inc.php';
$user = trim(strip_tags($_POST['login']));
$header = "$welcome, гость!";
$post = new Post();
$posts = $post->get_all();

require_once 'view/index.php';