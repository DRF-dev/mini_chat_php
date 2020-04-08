<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>mini_chat.fr</title>
	</head>
	<body>
		<form method="POST" action="chat.php">
		<fieldset>
		<Legend>Chat test</legend>
			<p><label>Pseudo du chatteur :<input type="text" name="pseudo" maxlength="20" required></input></label></p>
			<p><label>Message : <input type="text" name="message" required></input></label></p>
			<p><?php
				$calendar = date("d/m/Y");
				$hour = date("H")+1;
				$minute = date("i");
				$maintenant = "<strong>Date</strong> : " . $calendar . " " . $hour . ":" . $minute . ".";
				echo $maintenant;
				?>
				<p><input type="submit" value=Envoyer></p>
		</fieldset>
		<?php
			include ('Pseudo_message_date.php');
		?>
		</form>
	</body>
</html>