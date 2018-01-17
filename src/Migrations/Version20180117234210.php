<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180117234210 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE 
          t_circuit_cir 
        ADD 
          cir_name VARCHAR(255) DEFAULT NULL, 
        ADD 
          cir_category VARCHAR(255) DEFAULT NULL, 
        ADD 
          cir_description LONGTEXT DEFAULT NULL, 
        ADD 
          cir_cost DOUBLE PRECISION DEFAULT NULL, 
        ADD 
          cir_total_step INT NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE 
          t_circuit_cir 
        DROP 
          cir_name, 
        DROP 
          cir_category, 
        DROP 
          cir_description, 
        DROP 
          cir_cost, 
        DROP 
          cir_total_step');
    }
}
