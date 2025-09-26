<?php

namespace App\Membership\Application\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class LoginRequestDto
{
    public function __construct(

        #[Assert\NotBlank]
        public string $email, 

        #[Assert\NotBlank]
        public string $password){
        
    }
}
