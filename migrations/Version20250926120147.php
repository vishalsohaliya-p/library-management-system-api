<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250926120147 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE librarians (first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, email DATE NOT NULL, phone VARCHAR(100) NOT NULL, hire_date DATETIME NOT NULL, photo VARCHAR(255) NOT NULL, password_hash VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, librarianId_id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(librarianId_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE librarians');
    }
}
