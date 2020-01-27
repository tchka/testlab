<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
	
	<?php include "menu.php"; ?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.png">
		<div class="box_text">
			<p>
				<b>Добрый день</b>.
				Меня зовут <i>Порецков Олег</i>.
				Я совсем недавно начал программировать, однако уже написал свой первый сайт.
			</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал: <br>
				<a href="puzzle.php">Загадки,</a>
				<a href="guess.php">Угадайка,</a>
				<a href="guess-multy.php">Угадайка на 2 игрока</a>
			</p>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>


</body>
</html>