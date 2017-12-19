<?php
/**
* SITE PATH CONSTANTS:
* Update SITE_URL to match your environment
*/
define("SITE_ROOT", __DIR__);
define("SITE_URL", "/post/blog");


/**
* DATABASE CONNECTION:
* This is set up to work on local environment using MAMP.
*/
$dbname = "mtm6331-blog";
$dbuser = "root";
$dbpass = "root";
$dbhost = "localhost";

/**
* CREATING PDO OBJECT
* The PDO object is created and stored under the variable $pdo
*/
try {
    $pdo = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpass);
} catch (PDOException $err) {
    header('HTTP/1.1: 500');
    echo "Database connection problem" . $err->getMessage();
    exit();
}

/**
* TWIG CONFIGURATION:
* Loading and configuring Twig. You should not need to change this.
*/
require_once SITE_ROOT.'/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem(SITE_ROOT.'/templates');
$twig = new Twig_Environment($loader, array(
//  'cache' => SITE_ROOT.'/cache',
  'auto_reload' => true
));

/**
* SETTING TWIG GLOBAL VARIABLES
* These variables can be used inside a Twig template
*/
$twig->addGlobal("SITE_URL", SITE_URL);
$twig->addGlobal("BLOG_TITLE", "My First Blog");


/**
* GLOBAL UTILITIES FUNCTIONS
*/

/**
* Check for error returned from the database
* @param object a prepared statement object
* @return exit if a error has been returned.
*/
function check_for_errors($stmt) {
  if ($stmt) {
    $errorInfo = $stmt->errorInfo();

    if (isset($errorInfo[2])) {
    	echo $errorInfo[2];
    	exit;
    }
  }
}
