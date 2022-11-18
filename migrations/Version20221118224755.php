<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20221118224755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'added password field to user (PROJ-22)';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE user ADD password VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE user DROP password');
    }
}
