<?php

// The class is rather straightforward. We have 2 public functions as expected: home() and error()
// The first one is also defining some variables
// We’re doing this so we can later ouput their values in the view
// and not clutter our view with variables definition and other computation not related to anything visual.
// We usually name the view after the action name and we store it under the controller name.

class PagesController {

    public function home() {
        $first_name = 'Pierre';
        $last_name  = 'Laitselart';
        require_once('views/pages/home.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }

}