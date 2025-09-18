<?php

namespace App\Catalog\Domain\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Book{
    private int $bookId;
    private string $title;
    private string $isbn;
    private ?DateTimeInterface $publicationDate;
    private ?string $publisher;
    private ?string $edition;
    private int $numberOfPages;
    private ?string $shelfLocation;
    private string $coverImage;
    private string $description;
    private DateTimeInterface $createdAt;
    private int $createdBy;
    private ?DateTimeInterface $modifiedAt;
    private int $modifiedBy;
    private bool $isActive;
    private bool $isDeleted;

    private Collection $authors;
    private Category $category;

    private Language $language;

    public function __construct(){
        $this->authors = new ArrayCollection();
    }

    // Getter and Setter for bookId
    public function getBookId(): int {
        return $this->bookId;
    }

    public function setBookId(int $bookId): void {
        $this->bookId = $bookId;
    }

    // Getter and Setter for title
    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    // Getter and Setter for isbn
    public function getIsbn(): string {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): void {
        $this->isbn = $isbn;
    }

    // Getter and Setter for publicationDate
    public function getPublicationDate(): ?DateTimeInterface {
        return $this->publicationDate;
    }

    public function setPublicationDate(?DateTimeInterface $publicationDate): void {
        $this->publicationDate = $publicationDate;
    }

    // Getter and Setter for publisher
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): void {
        $this->publisher = $publisher;
    }

    // Getter and Setter for edition
    public function getEdition(): ?string {
        return $this->edition;
    }

    public function setEdition(?string $edition): void {
        $this->edition = $edition;
    }

    // Getter and Setter for numberOfPages
    public function getNumberOfPages(): int {
        return $this->numberOfPages;
    }

    public function setNumberOfPages(int $numberOfPages): void {
        $this->numberOfPages = $numberOfPages;
    }

    // Getter and Setter for shelfLocation
    public function getShelfLocation(): ?string {
        return $this->shelfLocation;
    }

    public function setShelfLocation(?string $shelfLocation): void {
        $this->shelfLocation = $shelfLocation;
    }

    // Getter and Setter for coverImage
    public function getCoverImage(): string {
        return $this->coverImage;
    }

    public function setCoverImage(string $coverImage): void {
        $this->coverImage = $coverImage;
    }

    // Getter and Setter for discription
    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
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

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    public function getLanguage(): Language
    {
        return $this->language;
    }

    public function setLanguage(Language $language): void
    {
        $this->language = $language;
    }
}