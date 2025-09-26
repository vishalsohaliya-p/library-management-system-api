<?php

namespace App\Membership\Application\DTO;

class LoginResponseDto
{
    public function __construct(
        public string $token)
        {}
}
