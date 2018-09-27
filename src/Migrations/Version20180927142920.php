<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180927142920 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE balisong (id INT AUTO_INCREMENT NOT NULL, description LONGTEXT NOT NULL, price DOUBLE PRECISION NOT NULL, colour VARCHAR(50) NOT NULL, blade_length INT NOT NULL, blade_material VARCHAR(50) NOT NULL, blade_type VARCHAR(50) NOT NULL, locking_type VARCHAR(50) NOT NULL, handle VARCHAR(50) NOT NULL, brand VARCHAR(50) NOT NULL, model VARCHAR(50) NOT NULL, ref INT NOT NULL, image_url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(100) NOT NULL, username VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL, firstname VARCHAR(30) DEFAULT NULL, lastname VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE balisong');
        $this->addSql('DROP TABLE user');
    }
}
