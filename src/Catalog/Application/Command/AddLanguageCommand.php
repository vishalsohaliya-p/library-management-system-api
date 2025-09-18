<?php

namespace App\Catalog\Application\Command;

class AddLanguageCommand
{
    public function __construct(
        public string $languageName
        ,public int $createdBy
        ,public bool $isActive
        ,public bool $isDeleted) {}
}
