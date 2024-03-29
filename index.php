<!DOCTYPE html>
<html>
<head>
	<?php
		  include "head.php";
		  ?> 
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

		<button id="revealMessage">Hello</button>
		<p id="hiddenMessage" style="display: none;">Hello there!</p>
		<h1>Sebas's Blog</h1>
		<div id="sortable-blog-list">
		<input class="search" placeholder="Search" />
    	<button class="sort" data-sort="title">Sort</button>
		<ul class="list">
			<?php
			$postTitles = getPostTitlesFromDatabase();

			foreach ($postTitles as $postTitle)  {
               echo "<li><a href='post.php?title=" . $postTitle ."'class='title'>" . $postTitle . "</a></li>";
           	    }
			?>
		</ul>
        </div>
	</main>
<footer>
   <?php
		  include "footer.php";
		  ?>  
</footer>
</body>
</html>