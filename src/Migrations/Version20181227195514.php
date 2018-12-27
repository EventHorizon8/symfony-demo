<?php
declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181227195514 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE region (id INT AUTO_INCREMENT NOT NULL, country_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_F62F176F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE producer (id INT AUTO_INCREMENT NOT NULL, region_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_976449DC98260155 (region_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classification (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, short_name VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_456BD231F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, classification_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_64C19C12A86559F (classification_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grape_variety (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wine (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, producer_id INT NOT NULL, grape_variety_id INT DEFAULT NULL, sugar_type INT NOT NULL, variety INT NOT NULL, INDEX IDX_560C646812469DE2 (category_id), INDEX IDX_560C646889B658FE (producer_id), INDEX IDX_560C6468ED00A18A (grape_variety_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE region ADD CONSTRAINT FK_F62F176F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE producer ADD CONSTRAINT FK_976449DC98260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('ALTER TABLE classification ADD CONSTRAINT FK_456BD231F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C12A86559F FOREIGN KEY (classification_id) REFERENCES classification (id)');
        $this->addSql('ALTER TABLE wine ADD CONSTRAINT FK_560C646812469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE wine ADD CONSTRAINT FK_560C646889B658FE FOREIGN KEY (producer_id) REFERENCES producer (id)');
        $this->addSql('ALTER TABLE wine ADD CONSTRAINT FK_560C6468ED00A18A FOREIGN KEY (grape_variety_id) REFERENCES grape_variety (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE producer DROP FOREIGN KEY FK_976449DC98260155');
        $this->addSql('ALTER TABLE wine DROP FOREIGN KEY FK_560C646889B658FE');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C12A86559F');
        $this->addSql('ALTER TABLE wine DROP FOREIGN KEY FK_560C646812469DE2');
        $this->addSql('ALTER TABLE wine DROP FOREIGN KEY FK_560C6468ED00A18A');
        $this->addSql('ALTER TABLE region DROP FOREIGN KEY FK_F62F176F92F3E70');
        $this->addSql('ALTER TABLE classification DROP FOREIGN KEY FK_456BD231F92F3E70');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE producer');
        $this->addSql('DROP TABLE classification');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE grape_variety');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE wine');
    }
}
