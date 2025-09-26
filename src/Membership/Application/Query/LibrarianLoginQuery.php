<?php

namespace App\Membership\Application\Query;

class LibrarianLoginQuery
{
    public function __construct(public string $email, public string $password) {}
}
