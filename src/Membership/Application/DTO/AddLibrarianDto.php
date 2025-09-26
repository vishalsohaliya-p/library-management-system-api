<?php

namespace App\Membership\Application\DTO;

use DateTimeInterface;
use Symfony\Component\Validator\Constraints as Assert;

class AddLibrarianDto
{
    public function __construct(

        #[Assert\NotBlank]
        public string $firstName,

        #[Assert\NotBlank]
        public string $lastName,

        #[Assert\NotBlank]
        public string $email,

        #[Assert\NotBlank]
        public string $phone,

        #[Assert\NotBlank]
        public DateTimeInterface $hireDate,

        public string $photo,
        #[Assert\NotBlank]
        public string $password,

        public bool $isActive,
        public bool $isDeleted
    ){

    }
}
