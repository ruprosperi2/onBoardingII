<?php 
namespace Practica\Onboardinii\Adrian;



class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function removeBook($title) {
        foreach ($this->books as $key => $book) {
            if ($book->getTitle() === $title) {
                unset($this->books[$key]);
                return true;
            }
        }
        return false;
    }

    public function listBooks() {
        return $this->books;
    }
}

