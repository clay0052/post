<?php

require_once "config.php";

/**
* NOTE: PDO Object is store in $pdo
* NOTE: The variable "slug" with a value of desire category is being passed
* through the url.
*/

$page = [];

/**
* 1. Check that variable "slug" has been passed throught the url.
* If not, redirect to the index page.
* NOTE: Replace true with the condition.
*/
if (true) {
  /**
  * 2. Create a Prepared Statment to SELECT the category WHERE the slug EQUALS
  * an anonymous variable.
  */


  /**
  * 3. Send the Prepared Statement to the Database
  * NOTE: Replace false with command to send the Prepared Statement.
  */
  $stmt = false;

  /**
  * 4. Create an array to hold the value of the anonymous variable
  */


  /**
  * 5. Execute the Prepared Statement with the array holding the value of the anonymous variable
  */


  /**
  * Checking for SQL Errors return from the Database.
  */
  check_for_errors($stmt);

  /**
  * 6. Fetch the category from the excuted statement.
  * Return an associative array
  */


  /**
  * 7. Check if a category was returned.
  * NOTE: If no row was return the fetch method will return false
  * NOTE: Replace true with the condition to check if a category was returned
  */
  if(true) {
    /**
    * 8. Add a "title" index to the $page array with the value of the category name
    */


    /**
    * 9. Create a Prepared Statment to SELECT the posts WHERE the post category id
    * EQUALS category_id from $category.
    */


    /**
    * 10. Send the SQL query to the Database using the PDO Object
    */


    /**
    * 11. Fetch all the results returned from the Database.
    * Return an associative array
    */


    /**
    * 12. Load the twig template for displaying the list of posts
    */
    $template = $twig->load('list.html.twig');

    /**
    * 13. Render the template with the posts returned from the database and the $page array.
    */
    echo $template->render([]);
  } else {
    /**
    * 14. Include error.php
    */

  }

} else {
  /**
  * 15. Redirect to the index page.
  */
  
}
