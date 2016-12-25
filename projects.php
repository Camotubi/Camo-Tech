<!DOCTYPE html>
<html>
	<head>
		<title>
		dev&#126Camo
		</title>
		<meta charsert ="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0" charsert ="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>

	<div class="row">
		<div class="col-10 title">
			<?php
			    include("title.php");
			?>
			</div>
			<div class = "col-2">
				<div class ="nav">
					<ul>
						<li><a href = "index.php">Home</a></li>
						<li><a href = "blog.php">Blog</a></li>
						<li><a href = "bio.php">Bio</a></li>
						<li><a class = "active" href = "projects.php">Projects</a></li>
						<li><a href = "contact.php">Contact</a></li>
				</ul>
				</div>

			</div>
		</div>

<div id="ads">

		</div>
		<div class="row">
			<div class ="col-10">
				<div class ="main">
					<div class="proj-box">
						<ul>
								<li>
									<h3>Camo Calculator V2</h3>
									<p>A Scientific Calculator. It should operate your input according to the specified order of priority</p>
									<a href="https://github.com/Camotubi/Camo-Calculator-V2">Source code</a>

								</li>
								<li>
									<h3>Calculadora</h3>
									<p>This is my first attemp at a scientific calculator. The algorithms used to follow order of priority and execution of operation is very ineficcient, but it will remain for the posterity.</p>
									<a href="https://github.com/Camotubi/Calculadora">Source code</a>
								</li>
								<li>
									<h3>Car Manager</h3>
									<p>Console application written in C++ to keep track of the fuel efficinecy of a list of cars</p>
									<p><span class="status-label">Status:</span>Working / Incomplete</p>
									<a href="https://github.com/Camotubi/Gaus-Jordan">Source Code</a>
								</li>
								<li>
									<h3>Gaus Jordan</h3>
									<p>An Algorithm to solve equations.</p>
									<a href="https://github.com/Camotubi/Gaus-Jordan">Source Code</a>


						</ul>
					</div>
				</div>
			</div>
			<div class="col-2 sidebar">
				<ul>
					<li>hola</li>
					<li>hola</li>
					<li>hola</li>
					<li>hola</li>
				</ul>
			</div>
		</div>
		<?php include("footer.php");?>
	</body>





</html>
