<?php

namespace App\Catalog\Application\DTO;

abstract class LanguageDto
{
    public string $languageName;

    public bool $isActive;

    public bool $isDeleted;
}
