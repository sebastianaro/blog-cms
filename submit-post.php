  <?php

   // get the data to insert into the db
   $title = $_POST["title"];
   $content = $_POST["content"];
   $date = $_POST["date"];
   $author = $_POST["author"];
   

   // insert the data with the sql query
   include_once 'assets/db_connect.php';
   $sql = "INSERT INTO posts (title, content, date, author) VALUES ('" . $title . "','" .  $content . "','" . $date . "','" . $author . "');";
   $result = mysqli_query($conn, $sql);
   
   // redirect to homepage
   header("Location: index.php");
?>