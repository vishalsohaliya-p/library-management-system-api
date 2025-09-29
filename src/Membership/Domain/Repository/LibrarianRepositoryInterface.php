<?php

namespace App\Membership\Domain\Repository;

use App\Membership\Domain\Entity\Librarian;

interface LibrarianRepositoryInterface
{
    public function getByEmial(string $email): Librarian;

    public function add(Librarian $librarian): void;

    public function getAll(): array;

    public function getById(int $librarianId): Librarian;

    public function update(Librarian $librarian): void;

    public function delete(Librarian $librarian): void;
}
