<?php

namespace App\Membership\Application\Handler;

use App\Membership\Application\Query\GetLibrarianByIdQuery;
use App\Membership\Domain\Entity\Librarian;
use App\Membership\Domain\Repository\LibrarianRepositoryInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles:GetLibrarianByIdQuery::class)]
class GetLibrarianByIdQueryHandler
{
    public function __construct(private LibrarianRepositoryInterface $librarianRepository) {}

    public function __invoke(GetLibrarianByIdQuery $query): Librarian
    {
        return $this->librarianRepository->getById($query->librarianId);
    }
}
