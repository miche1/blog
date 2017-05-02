<html>
<head>
<meta charset="UTF-8">
<title>first page</title>
<link href="scripte/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Menue Bar-->
<header id="menu">
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="seite2.html">Seite 2</a></li>
					<li><a href="seite3.html">Seite 3</a></li>
					<li><a href="form.php">Formular</a></li>
				</ul>
			</nav>
			<div>
				<a href="#menu" class="show">&#9776;</a>
				<a href="#" class="hide">&#10006;</a>
			</div>
</header>

<!--content-->
<section id="content">
<h1>Formular</h1>

	<section id="formular">
		<!--Eingabe Formular-->
		<div id="formDiv">
			<h3>Einträge hinzufügen</h3>
			<form action="form.php" method="post">
				<p>Vorname <br><input type="text" name="tbVorname"></p>
				<p>Nachname <br><input type="text" name="tbNachname"></p>
				<textarea name="comment" rows="5" cols="40">Bitte Inhalt einfügen</textarea><br>
				<input type="submit" name="commit" value="ABSENDEN">
			</form>
		</div>

		<!--Ausgabe Container-->
		<div id="loadContent">
			<h3>Einträge</h3>
				<?php
					$vorname = $_POST["tbVorname"];
					$nachname = $_POST["tbNachname"];
					$kommentar = $_POST["comment"];

					echo '<p>Name: '.$nachname.'</p>';
					echo '<p>Vorname:'.$vorname.'</p>';
					echo '<p>'.$kommentar.'</p>';
				?>
		</div>
	</section>
</section>


</body>
</html>
