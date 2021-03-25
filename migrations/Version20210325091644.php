<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210325091644 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carousel_like (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE log (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(128) NOT NULL, name VARCHAR(128) NOT NULL, date DATETIME NOT NULL, action VARCHAR(64) NOT NULL, page VARCHAR(64) NOT NULL, value VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, carousel_like_id INT DEFAULT NULL, category_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, path VARCHAR(255) NOT NULL, title LONGTEXT DEFAULT NULL, INDEX IDX_6A2CA10CE7342F1C (carousel_like_id), INDEX IDX_6A2CA10C12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, author_id INT NOT NULL, mailing_list_id INT NOT NULL, title VARCHAR(256) NOT NULL, date DATE NOT NULL, containment VARCHAR(8192) DEFAULT NULL, type VARCHAR(6) NOT NULL, INDEX IDX_1DD39950F675F31B (author_id), INDEX IDX_1DD399502C7EF3E4 (mailing_list_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CE7342F1C FOREIGN KEY (carousel_like_id) REFERENCES carousel_like (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE news ADD CONSTRAINT FK_1DD39950F675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE news ADD CONSTRAINT FK_1DD399502C7EF3E4 FOREIGN KEY (mailing_list_id) REFERENCES mailing_list (id)');
        $this->addSql('ALTER TABLE user ADD profile VARCHAR(128) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CE7342F1C');
        $this->addSql('DROP TABLE carousel_like');
        $this->addSql('DROP TABLE log');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE news');
        $this->addSql('ALTER TABLE user DROP profile');
    }
}
