<html>
	<head>
		<title>Добавить статью</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div id="header" class="col-md-10 col-md-offset-1">
				<h1><p class="text-center">Мой бложег</p></h1><br>

				<!-- Заголовок -->
				<h4><p class="text-right"><?=$header?></p></h4>

                <h3><?=$check?></h3>
					<div>
						<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
							<label>Заголовок: </label><br />
							<input name='title' type='title[]' placeholder="Заголовок статьи"></br>
							</br>
							<label>Статья: </label></br>
							<textarea class="form-control" rows="3" name="article" type="article[]" placeholder="Текст статьи"><?=$article?></textarea></br>
							<input type="submit" value="Запостить">
						</form>
					</div>
			</div>
		</div>

		<div id="footer">
			<!-- Нижняя часть страницы -->
			<p class="text-center">&copy; <?=COPYRIGHT?>, <?=strftime('%Y')?></p>
			<!-- Нижняя часть страницы -->
		</div>
    </body>
</html>