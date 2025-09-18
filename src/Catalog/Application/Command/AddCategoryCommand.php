<?php

namespace App\Catalog\Application\Command;

class AddCategoryCommand
{
    public function __construct(
        public string $categoryName,
        public ?string $description) {}
}