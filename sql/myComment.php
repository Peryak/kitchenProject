<?php

/***
  *   objet myComment pour le projet marmitton
  *   create by hugo couturier, 22/06/2016
  */

class myComment{

  private $name;
  private $rId;
  private $id;
  private $note;
  private $comment;

  public function __construct($pseudo, $rId, $id, $note, $comment) {
      $this->name = $pseudo;
      $this->id = $id;
      $this->name = $rId;
      $this->quantity = $note;
      $this->value = $comment;
  }

  public function addPseudo($pseudo) {
    $this->name = $pseudo;
  }

  public function addId($id) {
    $this->id = $id;
  }

  public function addRId($rId) {
    $this->rId = $rId;
  }

  public function addNote($note) {
    $this->note = $note;
  }

  public function addComment($comment) {
    $this->comment = $comment;
  }

  public function fill($pseudo, $id, $rId, $note, $comment) {
    $this->addPseudo($pseudo);
    $this->addId($id);
    $this->addRId($rId);
    $this->addNote($note);
    $this->addComment($comment);
    return ($this);
  }

  public function getPseudo() {
    return ($this->name);
  }

  public function getId() {
    return ($this->id);
  }

  public function getRId() {
    return ($this->rId);
  }

  public function getNote() {
    return ($this->note);
  }

  public function getComment() {
    return ($this->comment);
  }

  public function get() {
    $tab = array(
      'name' => $this->getPseudo(),
      'id' => $this->getId(),
      'rId' => $this->getRId(),
      'note' => $this->getNote(),
      'comment' => $this->getComment(),
    );
    return $tab;
  }
}
