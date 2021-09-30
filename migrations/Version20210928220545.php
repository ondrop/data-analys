<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210928220545 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE csse_covid19_daily_report (id INT AUTO_INCREMENT NOT NULL, fips VARCHAR(255) DEFAULT NULL, admin2 VARCHAR(255) DEFAULT NULL, province_state VARCHAR(255) DEFAULT NULL, country_region VARCHAR(255) DEFAULT NULL, last_update DATETIME NOT NULL, lat DOUBLE PRECISION DEFAULT NULL, long_field DOUBLE PRECISION DEFAULT NULL, confirmed INT DEFAULT NULL, deathes INT DEFAULT NULL, recovered INT DEFAULT NULL, active INT DEFAULT NULL, combined_key VARCHAR(255) DEFAULT NULL, incident_rate DOUBLE PRECISION DEFAULT NULL, case_fatality_ratio DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE csse_covid19_daily_report');
    }
}
