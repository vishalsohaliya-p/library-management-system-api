<?php

namespace App\Catalog\Domain\Repository;

use App\Catalog\Domain\Entity\Author;

interface AuthorRepositoryInterface
{
    public function save(Author $author): void;
    // public function delete(Author $author): void;
    // public function getById(int $id): ?Author;

}
