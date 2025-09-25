<?php

namespace App\Catalog\Application\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class AddLanguageDto 
{
    public function __construct(
    #[Assert\NotBlank(message: "This value should not be blank..")]
    #[Assert\Type(
        type: 'string',
        message: 'The provided value must be a string..'
    )]
    public readonly string $languageName,

    #[Assert\Type('bool')]
    public readonly bool $isActive,

    #[Assert\Type('bool')]
    public readonly bool $isDeleted
    ){}
}
