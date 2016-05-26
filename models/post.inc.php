<?php
	require_once '/models/db.inc.php';

//Создаем класс постов

	class Post extends DB {

		public function __construct() {
			parent::__construct();
		}

		public function get_all() { // Получаем все данные из БД в массив
			$posts = $this->db->query('SELECT * FROM `posts`');
			return $this->get_array($posts);
		}

		public function get_one($id) { // Получаем данные из БД по определенному id
			$stmt = $this->db->prepare("SELECT * FROM `posts` WHERE id = ?");
			$stmt->execute(array($id));

			return $stmt->fetch();
		}

		public function addition($title, $article){ // Добавляем данные в БД
			$stmt = $this->db->prepare("INSERT INTO `posts` (title, article) VALUES (?, ?)");
			$stmt->execute(array($title, $article));
		}

		public function delete($id) { // Удаляем данные из БД
			$stmt = $this->db->prepare("DELETE FROM `posts` WHERE id = ?");
			$stmt->execute(array($id));
			}

		public function update($title, $article, $id) { // Обновляем данные в БД
			$stmt = $this->db->prepare("UPDATE `posts` SET title = ?, article = ? WHERE id =?");
			$stmt->execute(array($title, $article, $id));
		}

/*		public function preview($article) {
			return (mb_strlen($this->article) > 200) ? (trim(strip_tags(mb_substr($this->article, 0, 199)))) . '...' : $this->article;
		}
*/
	}