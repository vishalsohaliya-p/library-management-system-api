<?php

namespace App\Catalog\Infrastructure\Repository;

use App\Catalog\Domain\Entity\Language;
use App\Catalog\Domain\Repository\LanguageRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

class LanguageRepository implements LanguageRepositoryInterface
{
    public function __construct(private EntityManagerInterface $entityManager) {}

    public function save(Language $language): void
    {
        $this->entityManager->persist($language);
        $this->entityManager->flush();
    }

    public function update(Language $language): void
    {
        $this->entityManager->flush();
    }

    public function getAllLanguages(): array
    {
        return $this->entityManager
            ->getRepository(Language::class)
            ->findAll();
    }

    public function getById(int $id): Language
    {
        return $this->entityManager
        ->getRepository(Language::class)
        ->find($id);
    }

    public function delete(Language $language): void
    {
        $this->entityManager->flush();
    }
}
