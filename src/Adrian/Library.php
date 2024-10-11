<?php

namespace Practica\Onboardinii\Adrian;



final class Library
{
    private $books = [];

    public function addBook(Book $book) : void 
    {
        $this->books[] = $book;
    }

    public function removeBook($title): void
    {
        $this->books = array_filter($this->books, function($book) use ($title) {
        return $book->getTitle() !== $title ;
        });
        
    }

    public function listBooks(): array
    {
        return $this->books;
    }
}
