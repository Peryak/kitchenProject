<?php

class Home extends Controller
{
    /* To check if the parameters work well
     * public function index($publicDirectory = '', $nextParam = '', $nextParam2)
     */
    public function index($publicDirectory = '', $name)
    {
    // 2nd "if" condition of core/App.php : echo 'home/index';
    // To test the parameters of index() : echo $nextParam.' '.$nextParam2;

    // To create a new instance of the user from the User.php model
    $user = $this->model('User');
    // To check if $user->name works $user->name = 'Pierre'; and echo $user->name;
    $user->name = $name;
    // To check if $name parameters works : echo $user->name;

    // When we call a view. home/index refers to views/home/index.php
    $this->view('home/index', ['name' => $user->name]);
    }

}

/* Tuto Graphikart

class tutoriels extends Controller{

    function index(){

        //$d = array();
        // Charge the model

        $this->loadModel('Tutoriel');
        $d['tutos'] = $this->Tutoriel->getLast();
        
        // Create a new instance from the class
        echo $this->Tutoriel->find();
        $d['tuto'] = array(
            'titre' => 'Salut',
            'description' => 'Exemple de description',
        );

        // Sent d view
        $this->set($d); 
        // Give the index view
        $this->render('index');
    }
}

*/