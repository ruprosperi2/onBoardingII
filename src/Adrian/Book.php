<?php
namespace Practica\Onboardinii\Adrian;

class Book {
    private $title;
    private $author;
    private $yearPublished;

    public function __construct($title, $author, $yearPublished) {
        $this->title = $title;
        $this->author = $author;
        $this->yearPublished = $yearPublished;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getYearPublished() {
        return $this->yearPublished;
    }
}

