<?php

use PHPUnit\Framework\TestCase;
use Practica\Onboardinii\Adrian\Library;
use Practica\Onboardinii\Adrian\Book;

class LibraryTest extends TestCase
{
    public function test_it_should_add_a_book()
    {
        $library = new Library();
        $book = new Book("1984", "Ruben Arias", 1949);

        $library->addBook($book);
        //print_r($library->listBooks());
        $this->assertCount(1, $library->listBooks());
    }

    public function test_it_should_remove_a_book()
    {
        $library = new Library();
        $book = new Book("1984", "Ruben Arias", 1949);

        $library->addBook($book);
        $library->removeBook("1984");

        $this->assertCount(0, $library->listBooks());
    }

    public function test_it_should_list_books_correctly()
    {
        $library = new Library();
        $book1 = new Book("1984", "Ruben Arias", 1949);
        $book2 = new Book("Te voy a matar", "Adrian Brito", 1960);

        $library->addBook($book1);
        $library->addBook($book2);
        $books = $library->listBooks();

        $this->assertCount(2, $books);
        $this->assertEquals("1984", $books[0]->getTitle());
        $this->assertEquals("Te voy a matar", $books[1]->getTitle());
    }
}
