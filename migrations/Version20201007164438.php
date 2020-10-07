<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

final class Version20201007164438 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Create the book table.';
    }

    public function up(Schema $schema) : void
    {
        $book = $schema->createTable('book');
        $book->addColumn('id', Types::INTEGER)
            ->setAutoincrement(true)
        ;
        $book->addColumn('isbn', Types::STRING)
            ->setLength(255)
        ;
        $book->addColumn('title', Types::STRING)
            ->setLength(255)
        ;

        $book->setPrimaryKey(['id']);
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('book');
    }
}
