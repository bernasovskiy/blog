<?

//Создаем класс подключения к БД

class DB {
	//Параметры для подключения
	private $hostname = "localhost:3305";
	private $name = 'blog';
	private $user = 'root';
	private $pass = '';
	protected $db;

	public function __construct() { //Подключаемся...
		try {
			$this->db = new PDO('mysql:host='.$this->hostname.'; dbname='.$this->name, $this->user, $this->pass);
			return true;
		}
		catch (PDOException $error) {
			echo $error->getMessage();
		}
	}

	protected function get_array($query_posts) { // Помещаем все данные из БД в массив
		$posts = array();

		foreach($query_posts as $row) {
			$posts[] = $row;
		}

	    return $posts;
	}
}