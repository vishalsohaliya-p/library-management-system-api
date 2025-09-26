<?php

namespace App\Shared\Domain\Service;

interface PasswordHasherInterface
{
    public function hash(string $plainPassword): string;
    public function verify(string $plainPassword, string $hashedPassword): bool;
}
