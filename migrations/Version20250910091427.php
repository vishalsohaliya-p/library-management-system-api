<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250910091427 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE books ADD CONSTRAINT FK_4A1B2A9282F1BAF4 FOREIGN KEY (language_id) REFERENCES languages (language_id)');
        $this->addSql('CREATE INDEX IDX_4A1B2A9282F1BAF4 ON books (language_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE books DROP FOREIGN KEY FK_4A1B2A9282F1BAF4');
        $this->addSql('DROP INDEX IDX_4A1B2A9282F1BAF4 ON books');
    }
}
