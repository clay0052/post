<?php

require_once "config.php";

/**
* NOTE: PDO Object is store in $pdo
*/

/**
* 1. Add a "title" index to the $page array with the value of the page title
*/
$page = [
  "title" => "My Blog"
  
];

/**
* 2. Create a SQL query to SELECT the FIVE most recent PUBLISHED post ORDER BY date
*/
$sql = "SELECT *
FROM posts
ORDER BY post_date DESC LIMIT 5";

/**
* 3. Send the SQL query to the Database using the PDO Object
*/
$result = $pdo->query($sql);

/**
* 4. Fetch all the results returned from the Database.
* Return an associative array
*/
  $posts = $result->fetchAll(PDO::FETCH_ASSOC);

/**
* 5. Load the twig template for displaying the list of posts
*/
$template = $twig->load('list.html.twig');

/**
* 6. Render the template with the posts returned from the database and the $page array.
*/
echo $template->render(["posts" => $posts, "page"=>$page]);
