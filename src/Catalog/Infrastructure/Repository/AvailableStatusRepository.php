<?php

namespace App\Catalog\Infrastructure\Repository;

use App\Catalog\Domain\Entity\AvailableStatus;
use App\Catalog\Domain\Repository\AvailableStatusRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

class AvailableStatusRepository implements AvailableStatusRepositoryInterface
{
    public function __construct(private EntityManagerInterface $entityManager){}
    
    public function save(AvailableStatus $availableStatus): void
    {
        $this->entityManager->persist($availableStatus);
    }
}
