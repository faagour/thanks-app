<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240225134054 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE merci ADD from_employee_id INT NOT NULL');
        $this->addSql('ALTER TABLE merci ADD CONSTRAINT FK_86B31E76A290CF3F FOREIGN KEY (to_employee_id) REFERENCES employee (id)');
        $this->addSql('ALTER TABLE merci ADD CONSTRAINT FK_86B31E76124CC039 FOREIGN KEY (from_employee_id) REFERENCES employee (id)');
        $this->addSql('CREATE INDEX IDX_86B31E76A290CF3F ON merci (to_employee_id)');
        $this->addSql('CREATE INDEX IDX_86B31E76124CC039 ON merci (from_employee_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE merci DROP FOREIGN KEY FK_86B31E76A290CF3F');
        $this->addSql('ALTER TABLE merci DROP FOREIGN KEY FK_86B31E76124CC039');
        $this->addSql('DROP INDEX IDX_86B31E76A290CF3F ON merci');
        $this->addSql('DROP INDEX IDX_86B31E76124CC039 ON merci');
        $this->addSql('ALTER TABLE merci DROP from_employee_id');
    }
}
