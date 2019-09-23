<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sebas' blog</title>
<link rel="stylesheet" href="assets/main.css">
</head>
<body>
	<body>

    <header class="site-header" role="banner">		
    
		  <?php
		  include "header.php";
		  ?>  
  		
	</header>
	<?php
    function getPostTitlesFromDatabase(){
    	$postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
    	return $postTitles;
    }

	?>
	<main>
		<h1>Sebas's Blog</h1>

		<ul>
			<?php
			$postTitles = getPostTitlesFromDatabase();

			foreach ($postTitles as $postTitle)  {
               echo "<li><a href='post.php'>" . $postTitle . "</a></li>";
           	    }
			?>
		</ul>
		<a href="part9.php">here</a>
	</main>
<footer>
   <?php
		  include "footer.php";
		  ?>  
</footer>
</body>
</html>