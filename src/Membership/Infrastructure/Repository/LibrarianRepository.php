<?php

namespace App\Membership\Infrastructure\Repository;

use App\Membership\Domain\Entity\Librarian;
use App\Membership\Domain\Repository\LibrarianRepositoryInterface;
use Doctrine\ORM\EntityManager;
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
}
