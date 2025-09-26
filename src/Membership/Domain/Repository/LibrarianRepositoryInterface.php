<?php

namespace App\Membership\Domain\Repository;

use App\Membership\Domain\Entity\Librarian;

interface LibrarianRepositoryInterface
{
    public function getByEmial(string $email): Librarian;

    public function add(Librarian $librarian): void;
}
