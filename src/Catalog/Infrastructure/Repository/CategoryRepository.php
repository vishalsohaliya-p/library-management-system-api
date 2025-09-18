<?php

namespace App\Catalog\Infrastructure\Repository;

use App\Catalog\Domain\Entity\Category;
use App\Catalog\Domain\Repository\CategoryRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function __construct(private EntityManagerInterface $entityManager) {}

    public function save(Category $category): void
    {
        $this->entityManager->persist($category);
    }
}
