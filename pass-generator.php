<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var arrLetters = [
			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
			'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't',
			'u', 'v', 'w', 'x', 'y', 'z',
			'A', 'B', 'C', 'D', 'E', 'F', 'J', 'H', 'I', 'J',
			'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
			'U', 'V', 'W', 'X', 'Y', 'Z'
		];

		function readInt(){
			var number = document.getElementById("lenghPass").value;
			return parseInt(number);
		}

		function write(text){
			document.getElementById("user_pass").innerHTML = "Ваш пароль: " + text;
		}

		function getRandomNumber(max) {
			return Math.round(Math.random() * max);
		}

		function generatePassword() {
			var length = readInt();

			var pass = '';

			for (var i = 0; i < length; i++) {
				var index = getRandomNumber(arrLetters.length - 1);
				pass += arrLetters[index];
			}

			write(pass);
		}

	</script>
</head>
<body>

<div class="content">
	
	<?php include "menu.php"; ?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Генератор пароля</h1>

			<div class="box">

				<p>Введите длину желаемого пароля</p>
				<input type="number" min="1" id="lenghPass">
				<div id="user_pass"></div>
				<br>
				<a href="#" onClick="generatePassword();">Начать</a>				
			</div>

        </div>
    </div>
</div>

	

</div>

<?php include "footer.php"; ?>


</body>
</html>