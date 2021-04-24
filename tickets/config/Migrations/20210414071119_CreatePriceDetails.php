<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePriceDetails extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('price_details');
        $table->addColumn('date_from', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('date_to', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('time', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('price', 'double', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('min_seats_number', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('max_seats_number', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('event_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('ticket_type_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
