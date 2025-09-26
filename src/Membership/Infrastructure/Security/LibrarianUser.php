<?php

namespace App\Membership\Infrastructure\Security;

use App\Membership\Domain\Entity\Librarian;
use Symfony\Component\Security\Core\User\UserInterface;

class LibrarianUser implements UserInterface
{
    public function __construct(private Librarian $librarian) {}

    public function getUserIdentifier(): string{
        return $this->librarian->getEmail();
    }

    public function getRoles(): array
    {
        //return $this->librarian->getRoles();
        return ['Admin'];
    }

    public function eraseCredentials(): void {}

    public function domain(): Librarian
    {
        return $this->librarian;
    }
}
