<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250505214510 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    // public function up(Schema $schema): void
    // {
    //     // this up() migration is auto-generated, please modify it to your needs
    //     $this->addSql(<<<'SQL'
    //         ALTER TABLE peinture ADD image_url VARCHAR(255) DEFAULT NULL
    //     SQL);
    //     $this->addSql(<<<'SQL'
    //         ALTER TABLE personne CHANGE id id INT NOT NULL
    //     SQL);
    //     $this->addSql(<<<'SQL'
    //         ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EFBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE
    //     SQL);
    //     $this->addSql(<<<'SQL'
    //         ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A21BD112
    //     SQL);
    //     $this->addSql(<<<'SQL'
    //         DROP INDEX UNIQ_8D93D649A21BD112 ON user
    //     SQL);
    //     $this->addSql(<<<'SQL'
    //         ALTER TABLE user DROP personne_id, DROP cin, CHANGE type type VARCHAR(255) NOT NULL
    //     SQL);
    // }
    public function up(Schema $schema): void
    {
        // Add image_url to peinture table
        //$this->addSql('ALTER TABLE peinture ADD image_url VARCHAR(255) DEFAULT NULL');
    
        // Drop constraint and column from user (if this is intentional)
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A21BD112');
        $this->addSql('DROP INDEX UNIQ_8D93D649A21BD112 ON user');
        $this->addSql('ALTER TABLE user DROP personne_id, DROP cin, CHANGE type type VARCHAR(255) NOT NULL');
    
        // NOTE: We REMOVE this line because it causes the migration to fail
        $this->addSql('ALTER TABLE personne CHANGE id id INT NOT NULL');
    
        // Keep the foreign key from personne to user if needed
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EFBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
    }
    
    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE peinture DROP image_url
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EFBF396750
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE personne CHANGE id id INT AUTO_INCREMENT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user ADD personne_id INT DEFAULT NULL, ADD cin VARCHAR(8) NOT NULL, CHANGE type type VARCHAR(255) DEFAULT 'personne' NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user ADD CONSTRAINT FK_8D93D649A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_8D93D649A21BD112 ON user (personne_id)
        SQL);
    }
}
