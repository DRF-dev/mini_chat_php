<?php
	if(isset($_POST['pseudo'])){
		$sql = new PDO('mysql:host=localhost; dbname=php', 'root', '');
		$bdd = $sql->prepare ('INSERT INTO mini_chat(Pseudo, date_message, Message) VALUES (:Pseudo, NOW(), :Message)');
		$bdd->execute(array(
			'Pseudo' => htmlspecialchars ($_POST['pseudo']),
			'Message' => htmlspecialchars ($_POST['message'])
		));
	}
	$sqltwo = new PDO('mysql:host=localhost; dbname=php', 'root', '');
	$bddtwo = $sqltwo->query('SELECT Pseudo, DATE_FORMAT(date_message, "%d/%m/%Y %Hh:%imin%ss") AS date_message, Message FROM mini_chat ORDER BY id');
	while($showme = $bddtwo->fetch()){
		echo '<p><strong> [' . $showme['date_message'] . '] : ' . $showme['Pseudo'] . '</strong> : ' . $showme['Message'] . '</p>';
	};
?>
