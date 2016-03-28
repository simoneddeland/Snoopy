<?php
/**
 * Config-file for Snoopy. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Snoopy paths.
 *
 */
define('SNOOPY_INSTALL_PATH', __DIR__ . '/..');
define('SNOOPY_THEME_PATH', SNOOPY_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(SNOOPY_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Snoopy variable.
 *
 */
$snoopy = array();


/**
 * Site wide settings.
 *
 */
$snoopy['lang']         = 'sv';
$snoopy['title_append'] = ' | Snoopy, en webbtemplate';

$snoopy['header'] = <<<EOD
<img class='sitelogo' src='img/snoopy.png' alt='Snoopy Logo'/>
<span class='sitetitle'>Snoopy</span>
<span class='siteslogan'>En webbtemplate som heter Snoopy</span>
EOD;

$snoopy['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright &copy; Simon Eddeland | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

/**
 * Theme related settings.
 *
 */
$snoopy['stylesheets'] = array('css/style.css');
$snoopy['favicon']    = 'favicon.ico';
