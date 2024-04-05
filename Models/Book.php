<?php
class Book
{
    private $title;
    private $author;
    private $description;
    public function __construct($title, $author, $description)
    {
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    public function getDescription()
    {
        return $this->description;
    }
}
?>
