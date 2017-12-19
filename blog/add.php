<?php

require_once "config.php";

/**
* NOTE: PDO Object is store in $pdo
* NOTE: The variable "slug" with a value of desire post is being passed through the url.
*/
$page = [
  "button" => "Add Post"
];

/**
* 1. Add a "title" index to the $page array with the value of the page title
*/


if (isset($_POST['submit'])) {
  /**
  * 2. Create a Prepared Statement to UPDATE the post and SET the values to
  * named varables WHERE the slug EQUALS a name variable.
  * NOTE: post_date is automatically set by database, and does not need to
  * be included in the prepared statement.
  */



  /**
  * 3. Send the Prepared Statement to the Database
  * NOTE: Replace false with command to send the Prepared Statement.
  */
  $stmt = false;

  /**
  * 4. Create an array to hold the values of the named variable where the values
  * come from the submitted form.
  * NOTE: The post_date column use the $date variable, set above.
  */


  /**
  * 5. Execute the Prepared Statement with the array holding the value of the named variable
  */


  /**
  * Checking for SQL Errors return from the Database.
  */
  check_for_errors($stmt);

  /**
  * 6. Redirect page to post page for the current post
  */


} else {
  /**
  * 12. Create a SQL query to SELECT all the categories
  */


  /**
  * 13. Send the SQL query to the Database using the PDO Object
  */


  /**
  * 14. Fetch all the results returned from the Database.
  * Return an associative array
  */


  /**
  * 15. Load the twig template for displaying the list of posts
  */
  $template = $twig->load('form.html.twig');

  /**
  * 16. Render the template with the post and categories returned from the database
  * and the $page array.
  */
  echo $template->render([]);

}
