<?php

namespace App\Membership\Application\Handler;

use App\Membership\Application\Command\AddLibrarianCommand;
use App\Membership\Domain\Entity\Librarian;
use App\Membership\Domain\Repository\LibrarianRepositoryInterface;
use App\Shared\Domain\Service\PasswordHasherInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles:AddLibrarianCommand::class)]
class AddLibrarianCommandHandler
{
    public function __construct(private LibrarianRepositoryInterface $librarianRepository, private PasswordHasherInterface $passwordHasher)
    {
        $this->librarianRepository = $librarianRepository;
        $this->passwordHasher = $passwordHasher;
    }

    public function __invoke(AddLibrarianCommand $command): void
    {
        $librarian = new Librarian();
        $librarian->setFirstName($command->firstName);
        $librarian->setLastName($command->lastName);
        $librarian->setEmail($command->email);
        $librarian->setPhone($command->phone);
        $librarian->setHireDate($command->hireDate);
        $librarian->setPhoto($command->photo);

        $passwordHash = $this->passwordHasher->hash($command->password);

        $librarian->setPasswordHash($passwordHash);
        $librarian->setIsActive($command->isActive);
        $librarian->setIsDeleted($command->isDeleted);


        $this->librarianRepository->add($librarian);
    }

}
