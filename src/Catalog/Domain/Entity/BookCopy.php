<?php

namespace App\Catalog\Domain\Entity;

use DateTimeInterface;

class BookCopy{
    private int $bookCopyId;
    private int $bookId;
    private string $bookCode;
    private int $bookConditionId;
    private int $availableStatusId;
    private DateTimeInterface $createdAt;
    private int $createBy;
    private ?DateTimeInterface $modifiedAt;
    private int $modifiedBy;
    private bool $isActive;
    private bool $isDeleted;

    // Getter and Setter for bookCopyId
    public function getBookCopyId(): int {
        return $this->bookCopyId;
    }

    public function setBookCopyId(int $bookCopyId): void {
        $this->bookCopyId = $bookCopyId;
    }

    // Getter and Setter for bookId
    public function getBookId(): int {
        return $this->bookId;
    }

    public function setBookId(int $bookId): void {
        $this->bookId = $bookId;
    }

    // Getter and Setter for bookCode
    public function getBookCode(): string {
        return $this->bookCode;
    }

    public function setBookCode(string $bookCode): void {
        $this->bookCode = $bookCode;
    }

    // Getter and Setter for bookConditionId
    public function getBookConditionId(): int {
        return $this->bookConditionId;
    }

    public function setBookConditionId(int $bookConditionId): void {
        $this->bookConditionId = $bookConditionId;
    }

    // Getter and Setter for availableStatusId
    public function getAvailableStatusId(): int {
        return $this->availableStatusId;
    }

    public function setAvailableStatusId(int $availableStatusId): void {
        $this->availableStatusId = $availableStatusId;
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