<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rasos asmeninnis puslapis</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap-theme.min.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Page</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
	            <!-- <li><a href="index2.php">Namai</a></li>
	            <li><a href="index2.php?page=cv">Curriculum Vitae</a></li>
	            <li><a href="index2.php?page=about">Apie mane</a></li>
	            <li><a href="index2.php?page=contacts">Kontaktai</a></li> -->
	        	<?php
					require ('masyvas.php');
					foreach ($pages as $i => $value) :
						echo '<li><a href="index2.php?page='.$value['page'].'">'.$value['title'].'</a></li>';
					endforeach;
				?>
	        </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


</body>
</html>