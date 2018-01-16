<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180116000217 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE t_location_loc (loc_id INT AUTO_INCREMENT NOT NULL, loc_type VARCHAR(255) NOT NULL, loc_type_detail VARCHAR(255) DEFAULT NULL, loc_name VARCHAR(255) DEFAULT NULL, loc_address LONGTEXT DEFAULT NULL, loc_postal_code VARCHAR(255) DEFAULT NULL, loc_town VARCHAR(255) DEFAULT NULL, loc_phone VARCHAR(255) DEFAULT NULL, loc_mail VARCHAR(255) DEFAULT NULL, loc_website VARCHAR(255) DEFAULT NULL, loc_facebook VARCHAR(255) DEFAULT NULL, loc_rank VARCHAR(255) DEFAULT NULL, loc_open_hour LONGTEXT DEFAULT NULL, loc_rate_clear LONGTEXT DEFAULT NULL, loc_min_rate VARCHAR(255) DEFAULT NULL, loc_max_rate VARCHAR(255) DEFAULT NULL, loc_producer VARCHAR(255) DEFAULT NULL, loc_latitude VARCHAR(255) DEFAULT NULL, loc_longitude VARCHAR(255) DEFAULT NULL, PRIMARY KEY(loc_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE circuit (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE t_location_loc');
        $this->addSql('DROP TABLE circuit');
    }
}
