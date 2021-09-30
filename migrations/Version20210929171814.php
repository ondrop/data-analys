<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210929171814 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE csse_covid19_daily_report_us (id INT AUTO_INCREMENT NOT NULL, province_state VARCHAR(255) DEFAULT NULL, country_region VARCHAR(255) DEFAULT NULL, last_update DATETIME DEFAULT NULL, lat DOUBLE PRECISION DEFAULT NULL, long_field DOUBLE PRECISION DEFAULT NULL, confirmed INT DEFAULT NULL, deaths INT DEFAULT NULL, recovered INT DEFAULT NULL, active INT DEFAULT NULL, fips DOUBLE PRECISION DEFAULT NULL, incident_rate DOUBLE PRECISION DEFAULT NULL, total_test_results INT DEFAULT NULL, people_hospitalized INT DEFAULT NULL, case_fatality_ratio DOUBLE PRECISION DEFAULT NULL, uid INT DEFAULT NULL, iso3 VARCHAR(255) DEFAULT NULL, testing_rate DOUBLE PRECISION DEFAULT NULL, hospitalization_rate DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE csse_covid19_daily_report_us');
    }
}
