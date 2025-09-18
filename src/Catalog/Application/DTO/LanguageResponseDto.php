<?php

namespace App\Catalog\Application\DTO;

use DateTimeInterface;
use JsonSerializable;

class LanguageResponseDto implements JsonSerializable
{
    public function __construct(
    private int $languageId,
    private string $languageName,
    private DateTimeInterface $createdAt,
    private int $createdBy,
    private ?DateTimeInterface $modifiedAt,
    private ?int $modifiedBy,
    private bool $isActive,
    private bool $isDeleted){}

    public function jsonSerialize(): array
    {
        return [
            'languageId' => $this->languageId,
            'languageName' => $this->languageName,
            'createdAt' => $this->createdAt->format('Y-m-d H:i:s'),
            'createdBy' => $this->createdBy,
            'modifiedAt' => $this->modifiedAt?->format('Y-m-d H:i:s'),
            'modifiedBy' => $this->modifiedBy,
            'isActive' => $this->isActive,
            'isDeleted' => $this->isDeleted,
        ];
    }

}
