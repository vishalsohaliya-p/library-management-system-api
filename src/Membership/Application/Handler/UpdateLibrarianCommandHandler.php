<?php

namespace App\Membership\Application\Handler;

use App\Membership\Application\Command\UpdateLibrarianCommand;
use App\Membership\Domain\Repository\LibrarianRepositoryInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles: UpdateLibrarianCommand::class)]
class UpdateLibrarianCommandHandler
{
    public function __construct(private LibrarianRepositoryInterface $librarianRepository)
    {
        $this->librarianRepository = $librarianRepository;
    }

    public function __invoke(UpdateLibrarianCommand $command): void
    {
        $librarian = $this->librarianRepository->getById($command->librarianId);
        
        $librarian->setFirstName($command->firstName);
        $librarian->setLastName($command->lastName);
        $librarian->setEmail($command->email);
        $librarian->setPhone($command->phone);
        $librarian->setHireDate($command->hireDate);
        $librarian->setPhoto($command->photo);

        $librarian->setIsActive($command->isActive);
        $librarian->setIsDeleted($command->isDeleted);

        $this->librarianRepository->update($librarian);
    }
}
