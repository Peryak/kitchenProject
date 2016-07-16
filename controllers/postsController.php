<?php

// the pages controller is managing static pages of our application
// whereas the posts controller is managing what we call a resource
// The resource here is a post
// A resource can usually be listed (index action), showed (show action), created, updated and destroyed
// Post::all() and Post::find() refer to the model Post
// One of the best piece of advice I was ever given was to write the final code as I want it to be
// This way I’m sure I’m writing the most beautiful code I can come up with and then I make sure it works
// So here, when I fetch the posts I want it to look like $posts = Post::all(); as this is clear and simple

class PostController {
    public function post() {
        require_once('views/pages/posts.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }
}