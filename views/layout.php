<DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
            integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <a href='/Other/MVClast'>Home</a>
        <!-- Let’s modify our layout to add a link to the posts in the header
            Final step: we have to create the views we require in the posts controller -->
        <a href='?controller=posts&action=index'>Posts</a>
        <a href='?controller=etapes&action=getst'>Etapes</a>
    </header>

    <body>

    <!-- In the middle we require another file: routes.php
        The only part we still need is the main area of our page
        We can determine what view we need to put there
        depending on our previously set $controller and $action variables
        The routes.php file is gonna take care of that -->

    <?php require_once('routes.php'); ?>

    <footer>
        Copyright
    </footer>
    <body>
<html>