<?php

namespace App\Membership\Application\Command;

use DateTimeInterface;

class UpdateLibrarianCommand
{
    public function __construct(
        public int $librarianId,
        public string $firstName,
        public string $lastName,
        public string $email,
        public string $phone,
        public DateTimeInterface $hireDate,
        public string $photo,
        public bool $isActive,
        public bool $isDeleted
    ) {}
}
