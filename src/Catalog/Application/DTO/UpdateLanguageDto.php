<?php

namespace App\Catalog\Application\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class UpdateLanguageDto
{
    public function __construct(
    #[Assert\NotBlank]
    #[Assert\Type('string')]
    public readonly string $languageName,

    #[Assert\Type('bool')]
    public readonly bool $isActive,

    #[Assert\Type('bool')]
    public readonly bool $isDeleted
    ){}
}
