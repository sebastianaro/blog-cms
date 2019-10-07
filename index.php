<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sebas' blog</title>
<script src="assets/script.js"></script>
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

	?>
	<main>

		<button onclick="revealMessage()">Hello</button>
		<p id="hiddenMessage" style="display: none;">Hello there!</p>
		<h1>Sebas's Blog</h1>

		<ul>
			<?php
			$postTitles = getPostTitlesFromDatabase();

			foreach ($postTitles as $postTitle)  {
               echo "<li><a href='post.php?title=" . $postTitle ."'>" . $postTitle . "</a></li>";
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