<?php

namespace App\Membership\Application\Command;

class DeleteLibrarianByIdCommand
{
    public function __construct(public int $librarianId) {}
}
