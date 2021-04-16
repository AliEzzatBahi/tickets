<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * ReservationDetails seed.
 */
class ReservationDetailsSeed extends AbstractSeed
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
                'seats_num' => '7',
                'total_price' => '1350.0',
                'reservation_id' => '1',
                'price_detail_id' => '1',
                'created' => '2021-04-14 08:47:31',
                'modified' => '2021-04-14 08:47:31',
            ],
        ];

        $table = $this->table('reservation_details');
        $table->insert($data)->save();
    }
}
