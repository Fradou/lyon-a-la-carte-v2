<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180116233105 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE t_position_pos (pos_id INT AUTO_INCREMENT NOT NULL, loc_id INT NOT NULL, cir_id INT NOT NULL, pos_step INT NOT NULL, INDEX IDX_3388F066505CAD1 (loc_id), INDEX IDX_3388F06F3B6BD5E (cir_id), PRIMARY KEY(pos_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_circuit_cir (cir_id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(cir_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE t_position_pos ADD CONSTRAINT FK_3388F066505CAD1 FOREIGN KEY (loc_id) REFERENCES t_location_loc (loc_id)');
        $this->addSql('ALTER TABLE t_position_pos ADD CONSTRAINT FK_3388F06F3B6BD5E FOREIGN KEY (cir_id) REFERENCES t_circuit_cir (cir_id)');
        $this->addSql('DROP TABLE circuit');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE t_position_pos DROP FOREIGN KEY FK_3388F06F3B6BD5E');
        $this->addSql('CREATE TABLE circuit (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE t_position_pos');
        $this->addSql('DROP TABLE t_circuit_cir');
    }
}
