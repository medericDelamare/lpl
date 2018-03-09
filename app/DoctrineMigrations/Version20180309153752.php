<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180309153752 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE categorie_menu (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE menu ADD categorie_menu_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A93935447B0 FOREIGN KEY (categorie_menu_id) REFERENCES categorie_menu (id)');
        $this->addSql('CREATE INDEX IDX_7D053A93935447B0 ON menu (categorie_menu_id)');
        $this->addSql('ALTER TABLE vin CHANGE type_id type_id INT NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A93935447B0');
        $this->addSql('DROP TABLE categorie_menu');
        $this->addSql('DROP INDEX IDX_7D053A93935447B0 ON menu');
        $this->addSql('ALTER TABLE menu DROP categorie_menu_id');
        $this->addSql('ALTER TABLE vin CHANGE type_id type_id INT DEFAULT NULL');
    }
}
