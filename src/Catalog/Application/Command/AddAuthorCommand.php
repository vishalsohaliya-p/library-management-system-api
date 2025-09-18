<?php

namespace App\Catalog\Application\Command;

use DateTimeInterface;

class AddAuthorCommand
{
    public function __construct(
        public string $firstname,
        public string $lastname,
        public DateTimeInterface $dateofbirth,
        public ?string $nationality = \null,
        public string $photo,
        public ?string $bio = \null
    ){}
}
