<!DOCTYPE html>
<html>
<head>
   <?php
include "head.php";
?>
</head>
<body>


    <header class="site-header" role="banner">
    <?php
include "header.php";
?>

	</header>
	<main>

		<h1>New Blog Post Submission</h1>
            <form action="submit-post.php" method="POST" class="post-submissions-form">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Title"></input>

                <label for="author">Author</label>
                <input type="text" id="author" name="author" placeholder="Author"></input>

                <label for="date">Date</label>
                <input type="date" id="date" name="date" placeholder="MM/DD/YYYY"></input>

                <label for="content">Content</label>
                <textarea name="content" id="content" placeholder="Content"></textarea>
                <button type="submit" name="submit">Submit</button>
            </form>


	</main>
<footer>
    <?php
include "footer.php";
?>
</footer>
</body>
</html>