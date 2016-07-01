<?php

//Our model is a class with 3 attributes
// It has a constructor so we can call
// $post = new Post('Neil', 'A Most Simple PHP MVC Beginners Tutorial') if need be
class Post {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $author;
    public $content;

    public function __construct($id, $author, $content) {
        $this->id      = $id;
        $this->author  = $author;
        $this->content = $content;
    }

    public static function allAction() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM posts');

        // we create a list of Post objects from the database results
        foreach($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['author'], $post['content']);
        }

        return $list;
    }

    public static function findAction($id) {
        $db = Db::getInstance();
        // we make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));
        $post = $req->fetch();

        return new Post($post['id'], $post['author'], $post['content']);
    }
}