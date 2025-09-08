<?php

namespace App\Membership\Domain\Entity;

use DateTimeInterface;

class Librarian{
    private int $librarianId;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $phone;
    private DateTimeInterface $hireDate;
    private string $photo;
    private string $passwordHash;
    private bool $isActive;
    private bool $isDeleted;

    // Getter and Setter for librarianId
    public function getLibrarianId(): int {
        return $this->librarianId;
    }

    public function setLibrarianId(int $librarianId): void {
        $this->librarianId = $librarianId;
    }

    // Getter and Setter for firstName
    public function getFirstName(): string {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    // Getter and Setter for lastName
    public function getLastName(): string {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    // Getter and Setter for email
    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    // Getter and Setter for phone
    public function getPhone(): string {
        return $this->phone;
    }

    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    // Getter and Setter for hireDate
    public function getHireDate(): DateTimeInterface {
        return $this->hireDate;
    }

    public function setHireDate(DateTimeInterface $hireDate): void {
        $this->hireDate = $hireDate;
    }

    // Getter and Setter for photo
    public function getPhoto(): string {
        return $this->photo;
    }

    public function setPhoto(string $photo): void {
        $this->photo = $photo;
    }

    // Getter and Setter for passwordHash
    public function getPasswordHash(): string {
        return $this->passwordHash;
    }

    public function setPasswordHash(string $passwordHash): void {
        $this->passwordHash = $passwordHash;
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