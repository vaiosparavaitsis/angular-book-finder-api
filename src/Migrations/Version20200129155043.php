<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * @package DoctrineMigrations
 */
final class Version20200129155043 extends AbstractMigration
{
    /**
     * @return string
     */
    public function getDescription() : string
    {
        return 'Book data table';
    }

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) : void
    {
        if (!$schema->hasTable('books')) {
            $table = $schema->createTable('books');
            $table->addColumn('id', 'integer')
                ->setAutoincrement(true)
                ->setUnsigned(true);

            $table->addColumn('title', 'string')->setNotnull(false);
            $table->addColumn('image', 'text')->setNotnull(false);
            $table->addColumn('author', 'string')->setNotnull(false);
            $table->addColumn('rating', 'string')->setNotnull(false);
            $table->addColumn('rating_count', 'string')->setNotnull(false);
            $table->addColumn('book_type', 'string')->setNotnull(false);
            $table->addColumn('discount_price', 'string')->setNotnull(false);
            $table->addColumn('actual_price', 'string')->setNotnull(false);
            $table->addColumn('save_price', 'string')->setNotnull(false);
            $table->addColumn('save_price_percent', 'string')->setNotnull(false);
            $table->addColumn('description', 'text')->setNotnull(false);
            $table->addColumn('age_range', 'string')->setNotnull(false);
            $table->addColumn('grade_level', 'string')->setNotnull(false);
            $table->addColumn('lexile_measure', 'string')->setNotnull(false);
            $table->addColumn('series', 'string')->setNotnull(false);
            $table->addColumn('paperback', 'string')->setNotnull(false);
            $table->addColumn('publisher', 'string')->setNotnull(false);
            $table->addColumn('language', 'string')->setNotnull(false);
            $table->addColumn('isbn10', 'string')->setNotnull(false);
            $table->addColumn('isbn13', 'string')->setNotnull(false);
            $table->addColumn('asin', 'string')->setNotnull(false);
            $table->addColumn('product_dimensions', 'string')->setNotnull(false);
            $table->addColumn('shipping_weight', 'string')->setNotnull(false);
            $table->addColumn('average_customer_review', 'string')->setNotnull(false);
            $table->addColumn('average_customer_review_count', 'string')->setNotnull(false);
            $table->addColumn('amazon_best_sellers_rank', 'string')->setNotnull(false);

            $table->addColumn('created_at', 'datetime');
            $table->addColumn('updated_at', 'datetime');

            $table->setPrimaryKey(['id']);
            $table->addIndex(['title']);
        }
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) : void
    {
        if ($schema->hasTable('books')) {
            $schema->dropTable('books');
        }
    }
}
