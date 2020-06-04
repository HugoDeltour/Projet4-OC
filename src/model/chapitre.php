<?php
  namespace App\src\model;

  class chapitre{
    private $id;
    private $title;
    private $text;
    private $author;

    public function getId(){
      return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle(){
      return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getText(){
      return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getauthor(){
      return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

  }
?>
