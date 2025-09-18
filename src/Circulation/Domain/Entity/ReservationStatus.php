<?php

namespace App\Circulation\Domain\Entity;

use DateTimeInterface;

class ReservationStatus{
    private int $reservationStatusId;
    private string $reservationStatusName;
    private DateTimeInterface $createdAt;
    private int $createdBy;
    private ?DateTimeInterface $modifiedAt;
    private int $modifiedBy;
    private bool $isActive;
    private bool $isDeleted;

    // Getter and Setter for reservationStatusId
    public function getReservationStatusId(): int {
        return $this->reservationStatusId;
    }

    public function setReservationStatusId(int $reservationStatusId): void {
        $this->reservationStatusId = $reservationStatusId;
    }

    // Getter and Setter for reservationStatusName
    public function getReservationStatusName(): string {
        return $this->reservationStatusName;
    }

    public function setReservationStatusName(string $reservationStatusName): void {
        $this->reservationStatusName = $reservationStatusName;
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
}