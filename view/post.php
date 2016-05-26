<html>
	<head>
		<title>Мой блог</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div id="header" class="col-md-10 col-md-offset-1">
				<h1><p class="text-center">Мой бложег</p></h1><br>

				<!-- Заголовок -->
				<h4><p class="text-right"><?=$header?></p></h4>
				<!-- Заголовок -->

					<!-- Меню администратора -->
				<? //Проверка на использование метода POST и отправку пустого поля вместо логина
					if (($_SERVER['REQUEST_METHOD'] !== 'POST') or empty($_POST['login'])){ ?>
						<form action='' method='post'>
							<div id="login-form" class="form-group">
								<p class="text-right">
								<input type="text" name="login" placeholder="Login">
								<input type='submit' value='Войти' />
								</p>
							</div>
						</form>
					<? } ?>

					<?//Создаем меню администратора
					if ($user=='admin') { ?>
						<div id="popup_menu">
							<p class="text-right">
							<a class="btn btn-info" href="/update.php?id=<?=$id; ?>">Редактировать статью</a>
							<a class="btn btn-danger" href="/post.php?id=<?=$post['id']; ?>" role="button">Выход</a>
							<form action="/delete.php" method="POST">
								<input type="hidden" name="id" value="<?=$id; ?>">
								<input type="submit" class="btn btn-warning" value="Удалить статью">
							</form>
							</p>
						</div>
						<? } elseif (!empty($user) and $user!='admin') { ?>
							<div id="popup_menu">
								<p class="text-right">
								<a class="btn btn-danger" href="/post.php?id=<?=$post['id']; ?>" role="button">Выход</a>
								</p>
							</div>
					<? } ?>
				<!-- Меню администратора -->


				<div id="content">
					<!-- Область основного контента -->
						<div class="panel panel-info">
							<div id="title" class="panel-heading">
							<strong><?=$post['title']?></strong>
							</div>
							<div id="article" class="panel-body">
								<p><?=$post['article']?></p>
							</div>
						</div>
					<!-- Область основного контента -->
				</div>


				<div id="footer">
					<!-- Нижняя часть страницы -->
					<p class="text-center">&copy; <?=COPYRIGHT?>, <?=strftime('%Y')?></p>
					<!-- Нижняя часть страницы -->
				</div>
			</div>
		</div>
	</body>
</html>