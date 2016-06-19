<?php

/*
 * Index is the users page landing
 *
 * .htaccess file rewrites the url and parses it as a $_GET url
 *  and disallow the access to some specific directories or files
 */

// Initialisation file
require_once '../app/init.php';

$app = new App();