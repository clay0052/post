<?php

require_once "config.php";

/**
* NOTE: PDO Object is store in $pdo
* NOTE: The variable "slug" with a value of desire post is being passed through the url.
*/
$page = [
  "button" => "Update Post"
];

/**
* 1. Add a "title" index to the $page array with the value of the page title
*/


if (isset($_POST['slug'])) {
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

}

/**
* 7. Check that variable "slug" has been passed throught the url.
* If not, redirect to the index page.
* NOTE: Replace true with the condition.
*/

if (true) {
  /**
  * 8. Create a Prepared Statment to SELECT the post WHERE the slug EQUALS
  * an anonymous variable.
  */


  /**
  * 9. Send the Prepared Statement to the Database
  * NOTE: Replace false with command to send the Prepared Statement.
  */
  $stmt = false;

  /**
  * 10. Create an array to hold the value of the anonymous variable
  */


  /**
  * 11. Execute the Prepared Statement with the array holding the value of the anonymous variable
  */


  /**
  * Checking for SQL Errors return from the Database.
  */
  check_for_errors($stmt);

  /**
  * 12. Fetch the post from the excuted statement.
  * Return an associative array
  */


  /**
  * 13. Check if a post was returned.
  * NOTE: If no row was return the fetch method will return false
  * NOTE: Replace true with the condition for checking if post was returned
  */
  if (true) {
    /**
    * 14. Create a SQL query to SELECT all the categories
    */


    /**
    * 15. Send the SQL query to the Database using the PDO Object
    */


    /**
    * 16. Fetch all the results returned from the Database.
    * Return an associative array
    */


    /**
    * 17. Load the twig template for displaying the list of posts
    */
    $template = $twig->load('form.html.twig');

    /**
    * 18. Render the template with the post and categories returned from the database
    * and the $page array.
    */
    echo $template->render([]);
  } else {
    /**
    * 19. Include error.php
    */

  }
} else {
  /**
  * 20. Redirect to the index page.
  */

}
