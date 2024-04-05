<?php
require_once '../Models/BookModel.php';



class BooksController
{
    public $model;

    public function __construct()
    {
        $this->model = new BookModel();
    }
    public function getBooks()
    {
        $books = $this->model->getBookList();

        if (is_array($books) && !empty($books)) {
            return $books;
        } else {
            return null;
        }
    }
    public function getBookDetails($title)
    {
        return $this->model->getBook($title);
    }
}
?>
