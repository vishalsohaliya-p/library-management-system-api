<?php

namespace App\Circulation\Domain\Entity;

use DateTimeInterface;

class Reservation{
    private int $reservationId;
    private int $memberId;
    private int $bookId;
    private DateTimeInterface $reservationDate;
    private int $reservationStatusId;
    private bool $isMailSent;
    private bool $isDeleted;


    // Getter and Setter for reservationId
    public function getReservationId(): int {
        return $this->reservationId;
    }

    public function setReservationId(int $reservationId): void {
        $this->reservationId = $reservationId;
    }

    // Getter and Setter for memberId
    public function getMemberId(): int {
        return $this->memberId;
    }

    public function setMemberId(int $memberId): void {
        $this->memberId = $memberId;
    }

    // Getter and Setter for bookId
    public function getBookId(): int {
        return $this->bookId;
    }

    public function setBookId(int $bookId): void {
        $this->bookId = $bookId;
    }

    // Getter and Setter for reservationDate
    public function getReservationDate(): DateTimeInterface {
        return $this->reservationDate;
    }

    public function setReservationDate(DateTimeInterface $reservationDate): void {
        $this->reservationDate = $reservationDate;
    }

    // Getter and Setter for reservationStatusId
    public function getReservationStatusId(): int {
        return $this->reservationStatusId;
    }

    public function setReservationStatusId(int $reservationStatusId): void {
        $this->reservationStatusId = $reservationStatusId;
    }

    // Getter and Setter for isMailSent
    public function isMailSent(): bool {
        return $this->isMailSent;
    }

    public function setIsMailSent(bool $isMailSent): void {
        $this->isMailSent = $isMailSent;
    }

    // Getter and Setter for isDeleted
    public function isDeleted(): bool {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): void {
        $this->isDeleted = $isDeleted;
    }
}