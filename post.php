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
	<main>
		<?php
				function getPostDetailsFromDatabase() {
		    // Get the post title
		    $postTitle = rawurldecode($_GET["title"]);

		    // Get the post that matches the postTitle
		    include_once 'assets/db_connect.php';
		    $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
		    $result = mysqli_query($conn, $sql);

		    // Get the first row from the result as an associative array
		    $postDetails = mysqli_fetch_assoc($result);
		    return $postDetails;
		}
		?>
		<?php 
		$postDetails = getPostDetailsFromDatabase();
		?>

		<h1><?php echo $postDetails ['title']; ?></h1>
		<div class="post-author"><?php echo $postDetails ['author']; ?></div>
        <div class="post-date"><?php echo $postDetails ['date']; ?></div>
        <div class="post-content">
        	<?php echo $postDetails ['content']; ?>
        </div>
        
	</main>
<footer>
    <?php
          include "footer.php";
          ?>  
</footer>
</body>
</html>