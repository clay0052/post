<?php

require_once "config.php";

/**
* NOTE: PDO Object is store in $pdo
* NOTE: The variable "slug" with a value of desire category is being passed
* through the url.
*/



/**
* 1. Check that variable "slug" has been passed throught the url.
* If not, redirect to the index page.
* NOTE: Replace true with the condition.
*/
if (isset($_GET['slug'])) {
  /**
  * 2. Create a Prepared Statment to SELECT the category WHERE the slug EQUALS
  * an anonymous variable.
  */
$sql = "SELECT *
FROM categories
WHERE category_slug = ?";

  /**
  * 3. Send the Prepared Statement to the Database
  * NOTE: Replace false with command to send the Prepared Statement.
  */
  $stmt = $pdo->prepare($sql);

  /**
  * 4. Create an array to hold the value of the anonymous variable
  */

$values = [$_GET['slug']];
  /**
  * 5. Execute the Prepared Statement with the array holding the value of the anonymous variable
  */
  $result = $stmt->execute($values);

  /**
  * Checking for SQL Errors return from the Database.
  */
  check_for_errors($stmt);

  /**
  * 6. Fetch the category from the excuted statement.
  * Return an associative array
  */
$category = $stmt->fetch(PDO::FETCH_ASSOC);

  /**
  * 7. Check if a category was returned.
  * NOTE: If no row was return the fetch method will return false
  * NOTE: Replace true with the condition to check if a category was returned
  */
  if($category) {
    /**
    * 8. Add a "title" index to the $page array with the value of the category name
    */
$page["title"] = $category['category_name'];

    /**
    * 9. Create a Prepared Statment to SELECT the posts WHERE the post category id
    * EQUALS category_id from $category.
    */
$sql = "SELECT * FROM posts WHERE category_id = ".$category['category_id'];

    /**
    * 10. Send the SQL query to the Database using the PDO Object
    */
    $result = $pdo->query($sql);

    /**
    * 11. Fetch all the results returned from the Database.
    * Return an associative array
    */
    $posts = $result->fetchAll(PDO::FETCH_ASSOC);

    /**
    * 12. Load the twig template for displaying the list of posts
    */
    $template = $twig->load('list.html.twig');

    /**
    * 13. Render the template with the posts returned from the database and the $page array.
    */
    echo $template->render(['posts' => $posts, "page" => $page]);
  } else {
    /**
    * 14. Include error.php
    */


    $template = $twig->load('error.html.twig');
    echo $template->render(["category"=>$category]);
  }

} else {
  /**
  * 15. Redirect to the index page.
  */
  $template = $twig->load('post.html.twig');

}
