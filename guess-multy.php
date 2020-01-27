<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
		}

		function write(id, text){
			document.getElementById(id).innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){

			var userAnswer = readInt();
			if(userAnswer == answer){
				write("info", "<b>Поздравляю, выиграл игрок № " + (tryCount % 2 ? "2" : "1") + "!</b><br>Правильный ответ: " + answer);
				hide("button");
				hide("stop");
				hide("userAnswer");
				hide("player");
			} else {

				if(userAnswer > answer){
					write("info", "Вы ввели слишком большое число");
				} else if(userAnswer < answer){
					write("info", "Вы ввели слишком маленькое число");
				}

				tryCount++;
				write("player", "Игрок №" + (tryCount % 2 ? "2" : "1"));

			}
		}

		function stop() {
			write("info", "Игра остановлена<br>Правильный ответ: " + answer);
			hide("button");
			hide("stop");
			hide("userAnswer");
			hide("player");
		}

	</script>
</head>
<body>

<div class="content">
	
	<?php include "menu.php"; ?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка на 2 игрока</h1>

			<div class="box">

				<p>Угадайте число от 0 до 100</p>
				<p id="info"></p>
				<p id="player">Игрок №1</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Ответ</a>
				<a href="#" onClick="stop();" id="stop">Закончить</a>			
			</div>

        </div>
    </div>
</div>

	

</div>

<?php include "footer.php"; ?>


</body>
</html>