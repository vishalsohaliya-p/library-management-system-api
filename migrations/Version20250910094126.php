<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250910094126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book_copies ADD CONSTRAINT FK_F0A8D81116A2B381 FOREIGN KEY (book_id) REFERENCES books (book_id)');
        $this->addSql('ALTER TABLE book_copies ADD CONSTRAINT FK_F0A8D811D19659EE FOREIGN KEY (book_condition_id) REFERENCES book_conditions (book_condition_id)');
        $this->addSql('ALTER TABLE book_copies ADD CONSTRAINT FK_F0A8D81187DBBA FOREIGN KEY (available_status_id) REFERENCES available_statuses (available_status_id)');
        $this->addSql('CREATE INDEX IDX_F0A8D81116A2B381 ON book_copies (book_id)');
        $this->addSql('CREATE INDEX IDX_F0A8D811D19659EE ON book_copies (book_condition_id)');
        $this->addSql('CREATE INDEX IDX_F0A8D81187DBBA ON book_copies (available_status_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book_copies DROP FOREIGN KEY FK_F0A8D81116A2B381');
        $this->addSql('ALTER TABLE book_copies DROP FOREIGN KEY FK_F0A8D811D19659EE');
        $this->addSql('ALTER TABLE book_copies DROP FOREIGN KEY FK_F0A8D81187DBBA');
        $this->addSql('DROP INDEX IDX_F0A8D81116A2B381 ON book_copies');
        $this->addSql('DROP INDEX IDX_F0A8D811D19659EE ON book_copies');
        $this->addSql('DROP INDEX IDX_F0A8D81187DBBA ON book_copies');
    }
}
