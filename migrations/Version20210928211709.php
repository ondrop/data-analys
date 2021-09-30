<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210928211709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE uid_iso_fips_look_up (id INT AUTO_INCREMENT NOT NULL, uid INT DEFAULT NULL, iso2 VARCHAR(255) DEFAULT NULL, iso3 VARCHAR(255) DEFAULT NULL, code3 INT DEFAULT NULL, fips VARCHAR(255) DEFAULT NULL, admin2 VARCHAR(255) DEFAULT NULL, province_state VARCHAR(255) DEFAULT NULL, country_region VARCHAR(255) DEFAULT NULL, lat DOUBLE PRECISION DEFAULT NULL, long_field DOUBLE PRECISION DEFAULT NULL, combined_key VARCHAR(255) DEFAULT NULL, population INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE uid_iso_fips_look_up');
    }
}
