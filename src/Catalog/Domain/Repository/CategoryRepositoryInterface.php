<?php

namespace App\Catalog\Domain\Repository;

use App\Catalog\Domain\Entity\Category;

interface CategoryRepositoryInterface
{
    public function save(Category $category): void;
}
