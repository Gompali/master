<?php

declare(strict_types=1);

namespace App\Common\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200102203348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql("CREATE DATABASE IF NOT EXISTS mailserver");
        $this->addSql("grant all on mailserver.* to 'mailadmin'@'localhost' identified by 'Rfix7L2Agvzsgz8svd3ciBRISeJvqj';");
        $this->addSql("grant all on mailserver.* to 'mailserver'@'127.0.0.1' identified by 'tgRe6a0ovOcgAs2OEWsABCfG8Dy700';");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}

