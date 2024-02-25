<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240225134546 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE merci ADD from_employee VARCHAR(30) NOT NULL, ADD to_employee VARCHAR(30) NOT NULL, DROP to_employee_id, DROP from_employee_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE merci ADD to_employee_id INT NOT NULL, ADD from_employee_id INT NOT NULL, DROP from_employee, DROP to_employee');
    }
}
