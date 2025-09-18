<?php

namespace App\Catalog\Domain\Entity;

use DateTimeInterface;

class BookCopy{
    private int $bookCopyId;
    private string $bookCode;
    private DateTimeInterface $createdAt;
    private int $createdBy;
    private ?DateTimeInterface $modifiedAt;
    private int $modifiedBy;
    private bool $isActive;
    private bool $isDeleted;

    private Book $book;
    private BookCondition $bookCondition;
    private AvailableStatus $availableStatus;

    // Getter and Setter for bookCopyId
    public function getBookCopyId(): int {
        return $this->bookCopyId;
    }

    public function setBookCopyId(int $bookCopyId): void {
        $this->bookCopyId = $bookCopyId;
    }

    // Getter and Setter for bookCode
    public function getBookCode(): string {
        return $this->bookCode;
    }

    public function setBookCode(string $bookCode): void {
        $this->bookCode = $bookCode;
    }

    // Getter and Setter for createdAt
    public function getCreatedAt(): DateTimeInterface {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): void {
        $this->createdAt = $createdAt;
    }

    // Getter and Setter for createdBy
    public function getcreatedBy(): int {
        return $this->createdBy;
    }

    public function setcreatedBy(int $createdBy): void {
        $this->createdBy = $createdBy;
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

    public function getBook(): Book
    {
        return $this->book;
    }

    public function getBookCondition(): BookCondition
    {
        return $this->bookCondition;
    }

    public function getAvailableStatus(): AvailableStatus
    {
        return $this->availableStatus;
    }
}