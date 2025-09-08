<?php

namespace App\Catalog\Domain\Entity;

use DateTimeInterface;

class Language{
    private int $languageId;
    private string $languageName;
    private DateTimeInterface $createdAt;
    private int $createBy;
    private ?DateTimeInterface $modifiedAt;
    private int $modifiedBy;
    private bool $isActive;
    private bool $isDeleted;

    // Getter and Setter for languageId
    public function getLanguageId(): int {
        return $this->languageId;
    }

    public function setLanguageId(int $languageId): void {
        $this->languageId = $languageId;
    }

    // Getter and Setter for languageName
    public function getLanguageName(): string {
        return $this->languageName;
    }

    public function setLanguageName(string $languageName): void {
        $this->languageName = $languageName;
    }

    // Getter and Setter for createdAt
    public function getCreatedAt(): DateTimeInterface {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): void {
        $this->createdAt = $createdAt;
    }

    // Getter and Setter for createBy
    public function getCreateBy(): int {
        return $this->createBy;
    }

    public function setCreateBy(int $createBy): void {
        $this->createBy = $createBy;
    }

    // Getter and Setter for modifiedAt
    public function getModifiedAt(): ?DateTimeInterface {
        return $this->modifiedAt;
    }

    public function setModifiedAt(?DateTimeInterface $modifiedAt): void {
        $this->modifiedAt = $modifiedAt;
    }

    // Getter and Setter for modifiedBy
    public function getModifiedBy(): int {
        return $this->modifiedBy;
    }

    public function setModifiedBy(int $modifiedBy): void {
        $this->modifiedBy = $modifiedBy;
    }

    // Getter and Setter for isActive
    public function isActive(): bool {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void {
        $this->isActive = $isActive;
    }

    // Getter and Setter for isDeleted
    public function isDeleted(): bool {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): void {
        $this->isDeleted = $isDeleted;
    }
}