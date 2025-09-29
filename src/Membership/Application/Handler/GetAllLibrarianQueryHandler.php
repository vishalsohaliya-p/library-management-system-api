<?php

namespace App\Membership\Application\Handler;

use App\Membership\Application\Query\GetAllLibrarianQuery;
use App\Membership\Domain\Repository\LibrarianRepositoryInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles:GetAllLibrarianQuery::class)]
class GetAllLibrarianQueryHandler
{
    public function __construct(private LibrarianRepositoryInterface $librarianRepository) {}

    public function __invoke(GetAllLibrarianQuery $query): array
    {
        return $this->librarianRepository->getAll();
    }
}
