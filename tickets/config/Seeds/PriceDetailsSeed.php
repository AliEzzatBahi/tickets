<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * PriceDetails seed.
 */
class PriceDetailsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'date' => '2021-04-14',
                'time' => '10:27:57',
                'price' => '2300',
                'min_seats_number' => '3',
                'max_seats_num' => '10',
                'event_id' => '1',
                'ticket_type_id' => '1',
                'created' => '2021-04-14 08:28:04',
                'modified' => '2021-04-14 08:28:04',
            ],
        ];

        $table = $this->table('price_details');
        $table->insert($data)->save();
    }
}
