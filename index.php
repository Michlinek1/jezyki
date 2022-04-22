<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formularz</title>
	<style>
	#wyk{
		font-weight: bold;
		font-size: 11px;
	}
	</style>

</head>
<body style = "text-align: center">
	<form action="wybieranie.php" method="post">
		<input type = "text" name = "imie" placeholder = "Wpisz coś"><br>
		<select name = "jezyki[]" multiple> <!-- multiple - wielokrotne wybieranie -->
			<option value = "Język angielski">Język Angielski</option>
			<option value = "Język hiszpanski">Język Hiszpanski</option>
			<option value = "Język wloski">Język Włoski</option>
			<option value = "Język rosysjki">Język Rosysjki</option>
			<option value = "Język francuski">Język Francusk</option>
			<option value = "Język niemiecki">Język Niemiecki</option>
		</select><br>
		<p><input type = "submit" value = "Wyślij" name = "wyslij"></p>
		</form>
		</body>

</html>