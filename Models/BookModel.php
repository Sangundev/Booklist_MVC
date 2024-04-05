<?php
require_once 'Book.php';

class BookModel
{
    private $books = [];

    public function __construct()
    {
        $this->books = $this->getBookList();
    }

    public function getBookList()
{
    return [
        "Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
        "Professional CodeIgniter" => new Book("Professional CodeIgniter", "Thomas Mayer", "A book about how to program with CodeIgniter Framework"),
        "PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "A tutorial book about programming language")
    ];

    
}


    public function getBook($title)
    {
        if (isset($this->books[$title])) {
            return $this->books[$title];
        } else {
            return null;
        }
    }
}
?>
