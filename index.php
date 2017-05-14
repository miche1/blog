<html>
<head>
<meta charset="UTF-8">
<title>Blog miche1</title>
<link href="scripte/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Menue Bar-->
<header id="menu">
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="scripte/about.html">Über mich</a></li>
					<li><a href="scripte/projects.html">Projekte</a></li>
					<li><a href="scripte/form.php">Eintrag hinzufügen</a></li>
				</ul>
			</nav>
			<div>
				<a href="#menu" class="show">&#9776;</a>
				<a href="#" class="hide">&#10006;</a>
			</div>
</header>

<!-- content -->
<main id="content">
<h1>HOME</h1>

	<article id="blog-list">
			<?php
				$blogcontent = file_get_contents('scripte/blog.txt');

				$blog = explode(";",$blogcontent);

				for ($x=count($blog)-1; $x>=0; $x--)
				{
        echo('<section id="blog">'.$blog[$x].'</section>');
				}
			?>
	</article>

</main>
</body>
</html>
