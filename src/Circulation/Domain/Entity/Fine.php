<?php

namespace App\Circulation\Domain\Entity;

use DateTimeInterface;

class Fine{
    private int $fineId;
    private int $borrowTransactionId;
    private float $fineAmount;
    private DateTimeInterface $fineDate;
    private ?DateTimeInterface $paymentDate;
    private DateTimeInterface $createdAt;
    private int $createBy;
    private ?DateTimeInterface $modifiedAt;
    private int $modifiedBy;
    private bool $isActive;
    private bool $isDeleted;

    // Getter and Setter for fineId
    public function getFineId(): int {
        return $this->fineId;
    }

    public function setFineId(int $fineId): void {
        $this->fineId = $fineId;
    }

    // Getter and Setter for borrowTransactionId
    public function getBorrowTransactionId(): int {
        return $this->borrowTransactionId;
    }

    public function setBorrowTransactionId(int $borrowTransactionId): void {
        $this->borrowTransactionId = $borrowTransactionId;
    }

    // Getter and Setter for fineAmount
    public function getFineAmount(): float {
        return $this->fineAmount;
    }

    public function setFineAmount(float $fineAmount): void {
        $this->fineAmount = $fineAmount;
    }

    // Getter and Setter for fineDate
    public function getFineDate(): DateTimeInterface {
        return $this->fineDate;
    }

    public function setFineDate(DateTimeInterface $fineDate): void {
        $this->fineDate = $fineDate;
    }

    // Getter and Setter for paymentDate
    public function getPaymentDate(): ?DateTimeInterface {
        return $this->paymentDate;
    }

    public function setPaymentDate(?DateTimeInterface $paymentDate): void {
        $this->paymentDate = $paymentDate;
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