<?php
require_once "config.php";

/**
* 1. Set the HTTP Status to 404 using the header function.
*/


/**
* 2. Add a title and message to the $page array to inform the user that
* the post or page could not be found.
*/


/**
* 3. Load the twig template for displaying the error page.
*/
$template = $twig->load('error.html.twig');

/**
* 4. Render the template with the $page array.
*/
echo $template->render([]);
