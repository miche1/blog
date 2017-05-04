<html>
<head>
<meta charset="UTF-8">
<title>Blog miche1</title>
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

<!-- content -->
<section id="content">
<h1>HOME</h1>

	<article id="blog-list">
			<?php
				$blogcontent = file_get_contents('scripte/blog.txt');

				$blog = explode(";",$blogcontent);

				for ($x=count($blog)-1; $x>=0; $x--)
				{
        echo('<article id="blog">'.$blog[$x].'</article>');
				}
			?>
	</article>

</section>

</body>
</html>
