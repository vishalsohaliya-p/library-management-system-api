<?php

namespace App\Membership\Domain\Entity;

use DateTimeInterface;

class Member{
    private int $memberId;
    private string $firstname;
    private string $lastname;
    private DateTimeInterface $dateofbirth;
    private string $email;
    private string $phone;
    private string $address;
    private DateTimeInterface $joinDate;
    private DateTimeInterface $expirationDate;
    private string $photo;
    private string $passwordHash;
    private DateTimeInterface $createdAt;
    private int $createdBy;
    private ?DateTimeInterface $modifiedAt;
    private int $modifiedBy;
    private bool $isActive;
    private bool $isDeleted;

    // Getter and Setter for memberId
    public function getmemberId(): int {
        return $this->memberId;
    }

    public function setmemberId(int $memberId): void {
        $this->memberId = $memberId;
    }

    // Getter and Setter for firstname
    public function getFirstname(): string {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void {
        $this->firstname = $firstname;
    }

    // Getter and Setter for lastname
    public function getLastname(): string {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void {
        $this->lastname = $lastname;
    }

    // Getter and Setter for dateofbirth
    public function getDateofbirth(): DateTimeInterface {
        return $this->dateofbirth;
    }

    public function setDateofbirth(DateTimeInterface $dateofbirth): void {
        $this->dateofbirth = $dateofbirth;
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

    // Getter and Setter for address
    public function getAddress(): string {
        return $this->address;
    }

    public function setAddress(string $address): void {
        $this->address = $address;
    }

    // Getter and Setter for joinDate
    public function getJoinDate(): DateTimeInterface {
        return $this->joinDate;
    }

    public function setJoinDate(DateTimeInterface $joinDate): void {
        $this->joinDate = $joinDate;
    }

    // Getter and Setter for expirationDate
    public function getExpirationDate(): DateTimeInterface {
        return $this->expirationDate;
    }

    public function setExpirationDate(DateTimeInterface $expirationDate): void {
        $this->expirationDate = $expirationDate;
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