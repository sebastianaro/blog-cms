 <?php 
 include_once 'assets/db_connect.php'
 ?>

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
	<main>



		 <?php

         $sql = "SELECT title FROM posts";
	     $result = mysqli_query($conn, $sql);
	     $resultCheck = mysqli_num_rows($result);

	     if (resultCheck > 0) {
	     	while ($row = mysqli_fetch_assoc($result)){
	     		echo $row['title']);
	     	}
	     }

        ?>
		<h1>Sebas's Blog</h1>
        

		<ul>
			<?php

			function getPostTitlesFromDatabase() {
			    // Get all the post titles from the posts table
			    include_once 'assets/db_connect.php';
			    $sql = "SELECT title FROM posts";
			    $result = mysqli_query($conn, $sql);
			    
			    // Get each result row as an assoc array, then add title to $postTitles
			    $postTitles = array();
			    while($row = mysqli_fetch_assoc($result)){
			        array_push($postTitles, $row['title']);
			    }
			    return $postTitles;
			}
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