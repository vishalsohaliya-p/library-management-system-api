<?php

namespace App\Membership\Infrastructure\Repository;

use App\Membership\Domain\Entity\Librarian;
use App\Membership\Domain\Repository\LibrarianRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

class LibrarianRepository implements LibrarianRepositoryInterface
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getByEmial(string $email): Librarian
    {
        return $this->entityManager->getRepository(Librarian::class)->findOneBy(["email"=> $email]);
    }

    public function add(Librarian $librarian): void
    {
        $this->entityManager->persist($librarian);
        $this->entityManager->flush();
    }

    public function getAll(): array
    {
        return $this->entityManager->getRepository(Librarian::class)->findAll();
    }

    public function getById(int $librarianId): Librarian
    {
       return $this->entityManager->getRepository(Librarian::class)->find($librarianId);
    }

    public function update(Librarian $librarian): void
    {
        $this->entityManager->flush();
    }

    public function delete(Librarian $librarian): void
    {
        $this->entityManager->flush();
    }
}
