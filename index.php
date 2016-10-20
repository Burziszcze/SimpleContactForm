<!DOCTYPE html>
<html lang="pl">
<head>
	<title>simple contact form</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="simple contact form with PHPmailer" />
    <meta name="keywords" content="contact form PHPmailer" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1" />
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<div class="container">
	<form id="contact_form" method="post" action="mailer.php" role="form">
			<h2>Skontaktuj się ze mną!</h2>
   			<input type="text" name="name" placeholder="Imię" required><br/>
   			<input type="email" name="email" placeholder="e-mail" required><br/>
   			<textarea name="message" placeholder="wiadomość" rows="7" cols="30" required></textarea><br>
   			<button type="submit" name="submit" id="submit" value="">Wyślij</button>
	</form>
</div>
</body>
</html>
