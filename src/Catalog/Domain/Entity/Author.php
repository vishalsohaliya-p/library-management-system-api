<?php

namespace App\Catalog\Domain\Entity;

use DateTimeInterface;

class Author {

    private int $authorId;
    private string $firstname;
    private string $lastname;
    private DateTimeInterface $dateofbirth;
    private ?string $nationality = \null;
    private string $photo;
    private ?string $bio = \null;
    private DateTimeInterface $createdAt;
    private int $createBy;
    private ?DateTimeInterface $modifiedAt;
    private int $modifiedBy;
    private bool $isActive;
    private bool $isDeleted;


    // Getter and Setter for authorId
    public function getAuthorId(): int {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): void {
        $this->authorId = $authorId;
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

    // Getter and Setter for nationality
    public function getNationality(): ?string {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): void {
        $this->nationality = $nationality;
    }

    // Getter and Setter for photo
    public function getPhoto(): string {
        return $this->photo;
    }

    public function setPhoto(string $photo): void {
        $this->photo = $photo;
    }

    // Getter and Setter for bio
    public function getBio(): ?string {
        return $this->bio;
    }

    public function setBio(?string $bio): void {
        $this->bio = $bio;
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