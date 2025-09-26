<?php

namespace App\Membership\Infrastructure\Security;

use App\Membership\Domain\Repository\LibrarianRepositoryInterface;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class LibrarianUserProvider implements UserProviderInterface
{
    public function __construct(private LibrarianRepositoryInterface $repository) {}

    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        $librarian = $this->repository->getByEmial($identifier);

        if (!$librarian) {
            throw new UserNotFoundException(sprintf('Librarian with email "%s" not found.', $identifier));
        }

        return new LibrarianUser($librarian);
    }

    public function refreshUser(UserInterface $user): UserInterface
    {
        // Not needed for stateless JWT
        return $user;
    }

    public function supportsClass(string $class): bool
    {
        return $class === LibrarianUser::class;
    }
}
