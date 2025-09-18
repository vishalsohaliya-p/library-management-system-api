<?php

namespace App\Catalog\Domain\Entity;

use DateTimeInterface;

class Category{
    private int $categoryId;
    private string $categoryName;
    private ?string $description;
    private DateTimeInterface $createdAt;
    private int $createdBy;
    private ?DateTimeInterface $modifiedAt;
    private int $modifiedBy;
    private bool $isActive;
    private bool $isDeleted;

    // Getter and Setter for categoryId
    public function getCategoryId(): int {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): void {
        $this->categoryId = $categoryId;
    }

    // Getter and Setter for categoryName
    public function getCategoryName(): string {
        return $this->categoryName;
    }

    public function setCategoryName(string $categoryName): void {
        $this->categoryName = $categoryName;
    }

    // Getter and Setter for description
    public function getdescription(): ?string {
        return $this->description;
    }

    public function setdescription(?string $description): void {
        $this->description = $description;
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