<?php

namespace Practica\Onboardinii\Adrian;

final class Book
{
    private $title;
    private $author;
    private $yearPublished;

    public function __construct(string $title, string $author, int $yearPublished)
    {
        $this->title = $title;
        $this->author = $author;
        $this->yearPublished = $yearPublished;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getAuthor() : string
    {
        return $this->author;
    }

    public function getYearPublished() : int
    {
        return $this->yearPublished;
    }
}
