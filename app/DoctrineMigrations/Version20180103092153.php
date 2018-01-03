<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180103092153 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE comments_laptop');
        $this->addSql('DROP TABLE comments_tablet');
        $this->addSql('ALTER TABLE Comments ADD created_at DATETIME NOT NULL, CHANGE text text LONGTEXT NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE comments_laptop (comments_id INT NOT NULL, laptop_id INT NOT NULL, INDEX IDX_4498A4B163379586 (comments_id), INDEX IDX_4498A4B1D59905E5 (laptop_id), PRIMARY KEY(comments_id, laptop_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comments_tablet (comments_id INT NOT NULL, tablet_id INT NOT NULL, INDEX IDX_BEBA650863379586 (comments_id), INDEX IDX_BEBA65081897676B (tablet_id), PRIMARY KEY(comments_id, tablet_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comments_laptop ADD CONSTRAINT FK_4498A4B163379586 FOREIGN KEY (comments_id) REFERENCES Comments (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comments_laptop ADD CONSTRAINT FK_4498A4B1D59905E5 FOREIGN KEY (laptop_id) REFERENCES laptop (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comments_tablet ADD CONSTRAINT FK_BEBA65081897676B FOREIGN KEY (tablet_id) REFERENCES tablet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comments_tablet ADD CONSTRAINT FK_BEBA650863379586 FOREIGN KEY (comments_id) REFERENCES Comments (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE Comments DROP created_at, CHANGE text text VARCHAR(1024) NOT NULL COLLATE utf8_unicode_ci');
    }
}
