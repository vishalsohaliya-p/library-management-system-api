<?php

namespace App\Shared\Infrastructure\Service;

use App\Shared\Domain\Service\PasswordHasherInterface;

class PasswordHasher implements PasswordHasherInterface
{
    public function hash(string $plainPassword): string
    {
        return password_hash($plainPassword, PASSWORD_BCRYPT);
    }

    public function verify(string $plainPassword, string $hashedPassword): bool
    {
        return password_verify($plainPassword, $hashedPassword);
    }

}
