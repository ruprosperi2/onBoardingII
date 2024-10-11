<?php

namespace Practica\Onboardinii\Adrian;



final class Library
{
    private $books = [];

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook($title): void
    {
        $this->books = array_filter($this->books, function($book) use ($title) {
        return $book->getTitle() !== $title ;
        });
        // foreach ($this->books as $key => $book) {
        //     if ($book->getTitle() === $title) {
        //         unset($this->books[$key]);
        //         return true;
        //     }
        // }
        // return false;
    }

    public function listBooks(): array
    {
        return $this->books;
    }
}
