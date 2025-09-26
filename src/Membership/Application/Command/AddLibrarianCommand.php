<?php

namespace App\Membership\Application\Command;

use DateTimeInterface;

class AddLibrarianCommand
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $email,
        public string $phone,
        public DateTimeInterface $hireDate,
        public string $photo,
        public string $password,
        public bool $isActive,
        public bool $isDeleted
    ){

    }

}
