<?php

namespace App\Membership\Application\DTO;

use DateTimeInterface;

class UpdateLibrarianDto
{
    public function __construct(
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
