<html>
<head>
<meta charset="UTF-8">
<title>blog miche1</title>
<link href="scripte/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Menue Bar-->
<header id="menu">
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.html">Über mich</a></li>
					<li><a href="projects.html">Projekte</a></li>
					<li><a href="form.php">Eintrag hinzufügen</a></li>
				</ul>
			</nav>
			<div>
				<a href="#menu" class="show">&#9776;</a>
				<a href="#" class="hide">&#10006;</a>
			</div>
</header>

<!--content-->
<section id="content">
<h1>Blog Einträge verwalten</h1>
	<p>Hier besteht die Möglichkeit neue Einträge für den Blog zu erstellen.</p>
	<section id="formular">
		<!--Eingabe Formular-->
		<div id="EingabeForm">
			<h3>neuer Eintrag</h3>
			<form action="form.php" method="post">
				<p>Thema <br><input type="text" name="tbThema"></p>
				<p>Name <br><input type="text" name="tbName"></p>
				<textarea name="blog" rows="15" cols="60" ></textarea><br>
				<input type="submit" name="commit" value="ABSENDEN">
			</form>
		</div>

		<!--Ausgabe Container-->
		<div id="loadContent">
			<h3>Vorschau</h3><br>
				<?php
				if(isset($_POST['commit'])){
					$thema = $_POST["tbThema"];
					$name = $_POST["tbName"];
					$kommentar = $_POST["blog"];

					$inhalt= "<h3> ".$thema."</h3><br><p>".$kommentar."<br><br><small>".$name." ... ".date("d.m.Y")." ".date("H:i")."</small></p>";

					file_put_contents('scripte/blog.txt', $inhalt.";", FILE_APPEND);

					echo $inhalt;
					echo '</br><p>Eintrag gepeichert</p>';
}
					?>
</body>
</html>
