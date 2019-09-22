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
		<h1>New Blog Post Submission</h1>
            <form class="post-submissions-form">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Title"></input>
                
                <label for="author">Author</label>
                <input type="text" id="author" name="author" placeholder="Author"></input>
                
                <label for="date">Date</label>
                <input type="date" id="date" name="date" placeholder="MM/DD/YYYY"></input>
                
                <label for="content">Content</label>
                <textarea name="content" id="content" placeholder="Content"></textarea>
                <button type="submit" value="Submit">Submit</input>
            </form>


	</main>
<footer>
    <?php
          include "footer.php";
          ?>   
</footer>
</body>
</html>