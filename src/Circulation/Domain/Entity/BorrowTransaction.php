<?php

namespace App\Circulation\Domain\Entity;

use DateTimeInterface;

class BorrowTransaction{
    private int $borrowTransactionId;
    private int $memberId;
    private int $bookCopyId;
    private DateTimeInterface $borrowDate;
    private DateTimeInterface $dueDate;
    private ?DateTimeInterface $returnDate;
    private ?float $fineAmount;
    private int $librarianId;
    private DateTimeInterface $createdAt;
    private int $createBy;
    private ?DateTimeInterface $modifiedAt;
    private int $modifiedBy;
    private bool $isActive;
    private bool $isDeleted;


    // Getter and Setter for borrowTransactionId
    public function getBorrowTransactionId(): int {
        return $this->borrowTransactionId;
    }

    public function setBorrowTransactionId(int $borrowTransactionId): void {
        $this->borrowTransactionId = $borrowTransactionId;
    }

    // Getter and Setter for memberId
    public function getMemberId(): int {
        return $this->memberId;
    }

    public function setMemberId(int $memberId): void {
        $this->memberId = $memberId;
    }

    // Getter and Setter for bookCopyId
    public function getbookCopyId(): int {
        return $this->bookCopyId;
    }

    public function setbookCopyId(int $bookCopyId): void {
        $this->bookCopyId = $bookCopyId;
    }

    // Getter and Setter for borrowDate
    public function getBorrowDate(): DateTimeInterface {
        return $this->borrowDate;
    }

    public function setBorrowDate(DateTimeInterface $borrowDate): void {
        $this->borrowDate = $borrowDate;
    }

    // Getter and Setter for dueDate
    public function getDueDate(): DateTimeInterface {
        return $this->dueDate;
    }

    public function setDueDate(DateTimeInterface $dueDate): void {
        $this->dueDate = $dueDate;
    }

    // Getter and Setter for returnDate
    public function getReturnDate(): ?DateTimeInterface {
        return $this->returnDate;
    }

    public function setReturnDate(?DateTimeInterface $returnDate): void {
        $this->returnDate = $returnDate;
    }

    // Getter and Setter for fineAmount
    public function getFineAmount(): ?float {
        return $this->fineAmount;
    }

    public function setFineAmount(?float $fineAmount): void {
        $this->fineAmount = $fineAmount;
    }

    // Getter and Setter for librarianId
    public function getLibrarianId(): int {
        return $this->librarianId;
    }

    public function setLibrarianId(int $librarianId): void {
        $this->librarianId = $librarianId;
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