<?php

// the pages controller is managing static pages of our application
// whereas the posts controller is managing what we call a resource
// The resource here is a post
// A resource can usually be listed (index action), showed (show action), created, updated and destroyed
// Post::all() and Post::find() refer to the model Post
// One of the best piece of advice I was ever given was to write the final code as I want it to be
// This way I’m sure I’m writing the most beautiful code I can come up with and then I make sure it works
// So here, when I fetch the posts I want it to look like $posts = Post::all(); as this is clear and simple

class PostsController {
    public function index() {
        // we store all the posts in a variable
        $posts = Post::all();
        require_once('views/posts/index.php');
    }

    public function show() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id']))
            return call('pages', 'error');

        // we use the given id to get the right post
        $post = Post::find($_GET['id']);
        require_once('views/posts/show.php');
    }
}