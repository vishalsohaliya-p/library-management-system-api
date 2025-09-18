<?php

namespace App\Catalog\Application\Command;

class UpdateLanguageCommand
{
    public function __construct(
        public int $languageId
        ,public string $languageName
        ,public int $modifiedBy
        ,public bool $isActive
        ,public bool $isDeleted) {}

}
