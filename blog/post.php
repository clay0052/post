
<?php

require_once "config.php";

/**
* NOTE: PDO Object is store in $pdo
* NOTE: The variable "slug" with a value of desire post is being passed through the url.
*/
$page = [];

/**
* 1. Check that variable "slug" has been passed throught the url.
* If not, redirect to the index page.
* NOTE: Replace true with the condition.
*/
if (isset($_GET['slug'])) {

  /**
  * 2. Create a Prepared Statment to SELECT the post WHERE the slug EQUALS
  * an anonymous variable.
  */
  $sql = "SELECT * FROM posts WHERE post_slug = ?";

  /**
  * 3. Send the Prepared Statement to the Database
  * NOTE: Replace false with command to send the Prepared Statement.
  */
  $stmt = $pdo->prepare($sql);

  /**
  * 4. Create an array to hold the value of the anonymous variable
  */
  $values = [$_GET["slug"]];

  /**
  * 5. Execute the Prepared Statement with the array holding the value of the anonymous variable
  */
  $result = $stmt->execute($values);

  /**
  * Checking for SQL Errors return from the Database.
  */
  check_for_errors($stmt);

  /**
  * 6. Fetch the post from the excuted statement.
  * Return an associative array
  */



  /**
  * 7. Check if a post was returned.
  * NOTE: If no row was return the fetch method will return false
  * NOTE: Replace true with the condition to check if a post was returned
  */
  if($post = $stmt->fetch(PDO::FETCH_ASSOC)){
    /**
    * 8. Create a SQL query to SELECT the category WHERE the category ID EQUALS
    * the category ID from the post.
    */
    $sql = "SELECT * FROM categories WHERE category_id = ".$post['category_id'];

    /**
    * 9. Send the SQL query to the Database using the PDO Object
    */
    $result = $pdo->query($sql);

    /**
    * 10. Fetch the result returned from the Database.
    * Return an associative array
    */
    $category = $result->fetch(PDO::FETCH_ASSOC);

    /**
    * 11. Add a "title" index to the $page array with the value of the post title
    */
    $page["title"] = $post['post_title'];
    /**
    * 12. Load the twig template for displaying the post
    */
    $template = $twig->load('post.html.twig');

    /**
    * 13. Render the template with the post returned from the database and the $page array.
    */
    echo $template->render(["post" => $post, "category" => $category, "page" => $page]);
  } else {
    /**
    * 14. Include error.php
    */
    include "error.php";
  }
} else {
  /**
  * 15. Redirect to the index page.
  */
  header('Location: index.php');
}
