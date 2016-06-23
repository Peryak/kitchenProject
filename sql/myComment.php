<?php

/***
  *   objet myComment pour le projet marmitton
  *   create by hugo couturier, 22/06/2016
  */

class myContent{

  $pseudo;
  $rId;
  $id;
  $note;
  $comment;

  public function __construct($pseudo, $rId, $id, $note, $comment){
      $this->pseudo = $pseudo;
      $this->id = $id;
      $this->name = $rId;
      $this->quantity = $note;
      $this->value = $comment;
  }

  public function addPseudo($pseudo){
    $this->pseudo = $pseudo;
  }

  public function addId($id){
    $this->id = $id;
  }

  public function addRId($rId){
    $this->rId = $rId;
  }

  public function addNote($note){
    $this->note = $note;
  }

  public function addComment($comment){
    $this->comment = $comment;
  }

  public function fill($pseudo, $id, $rId, $note, $comment){
    $this->addPseudo($pseudo);
    $this->addId($id);
    $this->addRId($rId);
    $this->addNote($note);
    $this->addComment($comment);
    return ($this);
  }
}
