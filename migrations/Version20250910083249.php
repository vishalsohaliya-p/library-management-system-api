<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250910083249 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE book_authors (book_id INT NOT NULL, author_id INT NOT NULL, INDEX IDX_1D2C02C716A2B381 (book_id), INDEX IDX_1D2C02C7F675F31B (author_id), PRIMARY KEY(book_id, author_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE book_authors ADD CONSTRAINT FK_1D2C02C716A2B381 FOREIGN KEY (book_id) REFERENCES books (book_id)');
        $this->addSql('ALTER TABLE book_authors ADD CONSTRAINT FK_1D2C02C7F675F31B FOREIGN KEY (author_id) REFERENCES authors (author_id)');
        $this->addSql('ALTER TABLE books DROP author_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book_authors DROP FOREIGN KEY FK_1D2C02C716A2B381');
        $this->addSql('ALTER TABLE book_authors DROP FOREIGN KEY FK_1D2C02C7F675F31B');
        $this->addSql('DROP TABLE book_authors');
        $this->addSql('ALTER TABLE books ADD author_id INT NOT NULL');
    }
}
