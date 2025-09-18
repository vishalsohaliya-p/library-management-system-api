<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250910064731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE authors (author_id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, date_of_birth DATE NOT NULL, nationality VARCHAR(100) DEFAULT NULL, photo VARCHAR(255) NOT NULL, bio LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, created_by INT NOT NULL, modified_at DATETIME DEFAULT NULL, modified_by INT NOT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, PRIMARY KEY(author_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE book_conditions (book_condition_id INT AUTO_INCREMENT NOT NULL, book_condition_name VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, created_by INT NOT NULL, modified_at DATETIME DEFAULT NULL, modified_by INT NOT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, PRIMARY KEY(book_condition_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE book_copies (book_copy_id INT AUTO_INCREMENT NOT NULL, book_id INT NOT NULL, book_code VARCHAR(100) NOT NULL, book_condition_id INT NOT NULL, available_status_id INT NOT NULL, created_at DATETIME NOT NULL, created_by INT NOT NULL, modified_at DATETIME DEFAULT NULL, modified_by INT NOT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, PRIMARY KEY(book_copy_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE books (book_id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, isbn VARCHAR(20) NOT NULL, publication_date DATE DEFAULT NULL, publisher VARCHAR(150) DEFAULT NULL, edition VARCHAR(50) DEFAULT NULL, number_of_pages INT NOT NULL, shelf_location VARCHAR(50) DEFAULT NULL, cover_image VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, author_id INT NOT NULL, category_id INT NOT NULL, language_id INT NOT NULL, created_at DATETIME NOT NULL, created_by INT NOT NULL, modified_at DATETIME DEFAULT NULL, modified_by INT NOT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, PRIMARY KEY(book_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (category_id INT AUTO_INCREMENT NOT NULL, category_name VARCHAR(255) NOT NULL, description VARCHAR(1000) NOT NULL, created_at DATETIME NOT NULL, created_by INT NOT NULL, modified_at DATETIME DEFAULT NULL, modified_by INT NOT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, PRIMARY KEY(category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE languages (language_id INT AUTO_INCREMENT NOT NULL, language_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, created_by INT NOT NULL, modified_at DATETIME DEFAULT NULL, modified_by INT NOT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, PRIMARY KEY(language_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE authors');
        $this->addSql('DROP TABLE book_conditions');
        $this->addSql('DROP TABLE book_copies');
        $this->addSql('DROP TABLE books');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE languages');
    }
}
