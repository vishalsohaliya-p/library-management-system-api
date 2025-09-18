<?php

namespace App\Catalog\Infrastructure\Repository;

use App\Catalog\Domain\Entity\Author;
use App\Catalog\Domain\Repository\AuthorRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

class AuthorRepository implements AuthorRepositoryInterface
{
    public function __construct(private EntityManagerInterface $entityManager){}
    public function save(Author $author): void
    {
        $this->entityManager->persist($author);
    }
}
