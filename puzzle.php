<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<?php
	$tasks = [
		[
			'task' => "Летом серый, а зимой белый.",
			'answers' => ["заяц"]
		],
		[
			'task' => "У кого из зверей Хвост пушистее и длинней?",
			'answers' => ["лиса"]
		],
		[
			'task' => "Кто на себе свой дом носит?",
			'answers' => ["черепаха", "улитка"]
		],
		[
			'task' => "Не ездок, а со шпорами, Не будильник, а всех будит.",
			'answers' => ["петух"]
		]
	];

	if (isset($_POST['check'])) {
		$score = 0;
		foreach ($tasks as $key => $task) {
			$answerUser = mb_strtolower($_POST['userAnswer_' . $key]);
			if (in_array($answerUser, $task['answers'])) {
				$score++;
			}
		}
	}

?>

<div class="content">

	<?php include "menu.php"; ?>

	<div class="contentWrap">
	    <div class="content">
	        <div class="center">

				<h1>Игра в загадки</h1>

				<div class="box">

					<?php
						if(isset($score)) :
					?>
					<div class="result">
						Вы отгадали <?php echo $score; ?> загадок.
					</div>

					<?php
						endif;
					?>

					<form method="POST">

						<?php
							foreach($tasks as $key => $task) :
						?>

							<p><?php echo $task['task'];?></p>
							<input type="text" name="userAnswer_<?php echo $key;?>">

						<?php
							endforeach;
						?>

						<br>
						<input class="btn" name="check" type="submit" value="Ответить">
					</form>

				</div>

	        </div>
	    </div>
	</div>

</div>

<?php include "footer.php"; ?>

</body>
</html>