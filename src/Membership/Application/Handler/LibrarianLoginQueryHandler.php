<?php

namespace App\Membership\Application\Handler;

use App\Membership\Application\Query\LibrarianLoginQuery;
use App\Membership\Domain\Entity\Librarian;
use App\Membership\Domain\Repository\LibrarianRepositoryInterface;
use App\Shared\Infrastructure\Service\PasswordHasher;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles: LibrarianLoginQuery::class)]
class LibrarianLoginQueryHandler
{
    public function __construct(private PasswordHasher $passwordHasher
    ,private LibrarianRepositoryInterface $librarianRepository){
        $this->passwordHasher = $passwordHasher;
        $this->librarianRepository = $librarianRepository;
    }

    public function __invoke(LibrarianLoginQuery $query): ?Librarian
    {
        $librarian = $this->librarianRepository->getByEmial($query->email);

        if (!$librarian) {
            return null;
        }

        if (!$librarian->isActive() || $librarian->isDeleted()) {
            return null;
        }

        if(!$this->passwordHasher->verify($query->password, $librarian->getPasswordHash()))
        {
            return null;
        }

        return $librarian;
    }

}
