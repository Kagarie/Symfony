<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210315132448 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE album (id INT AUTO_INCREMENT NOT NULL, groupe_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, chemin_image VARCHAR(255) DEFAULT NULL, INDEX IDX_39986E437A45358C (groupe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, nombre_membre INT NOT NULL, chemin_logo VARCHAR(255) DEFAULT NULL, genre VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE musique (id INT AUTO_INCREMENT NOT NULL, album_id INT DEFAULT NULL, chemin_musique VARCHAR(255) DEFAULT NULL, titre VARCHAR(255) NOT NULL, INDEX IDX_EE1D56BC1137ABCF (album_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE album ADD CONSTRAINT FK_39986E437A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id)');
        $this->addSql('ALTER TABLE musique ADD CONSTRAINT FK_EE1D56BC1137ABCF FOREIGN KEY (album_id) REFERENCES album (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE musique DROP FOREIGN KEY FK_EE1D56BC1137ABCF');
        $this->addSql('ALTER TABLE album DROP FOREIGN KEY FK_39986E437A45358C');
        $this->addSql('DROP TABLE album');
        $this->addSql('DROP TABLE groupe');
        $this->addSql('DROP TABLE musique');
    }
}
