<?php

namespace App\Membership\Application\Query;

class GetLibrarianByIdQuery
{
    public function __construct(
        public int $librarianId) {}
}
