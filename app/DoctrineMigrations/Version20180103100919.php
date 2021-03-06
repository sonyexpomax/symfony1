<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180103100919 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE laptop_comments (id INT AUTO_INCREMENT NOT NULL, laptop_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, comment LONGTEXT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_FE406732D59905E5 (laptop_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE laptop_comments ADD CONSTRAINT FK_FE406732D59905E5 FOREIGN KEY (laptop_id) REFERENCES laptop (id)');
        $this->addSql('DROP TABLE Comments');
        $this->addSql('ALTER TABLE laptop CHANGE images images LONGTEXT NOT NULL, CHANGE description description LONGTEXT NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Comments (id INT AUTO_INCREMENT NOT NULL, laptop_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, text VARCHAR(1024) NOT NULL COLLATE utf8_unicode_ci, INDEX IDX_A6E8F47CD59905E5 (laptop_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Comments ADD CONSTRAINT FK_A6E8F47CD59905E5 FOREIGN KEY (laptop_id) REFERENCES laptop (id)');
        $this->addSql('DROP TABLE laptop_comments');
        $this->addSql('ALTER TABLE laptop CHANGE images images VARCHAR(1024) NOT NULL COLLATE utf8_unicode_ci, CHANGE description description VARCHAR(1024) NOT NULL COLLATE utf8_unicode_ci');
    }
}
