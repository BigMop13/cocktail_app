<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20221111180607 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'added instruction field to cocktail table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE cocktail ADD instructions LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE cocktail DROP instructions');
    }
}
