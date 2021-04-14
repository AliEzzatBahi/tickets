<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Reservations seed.
 */
class ReservationsSeed extends AbstractSeed
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
                'price_detail_id' => '1',
                'user_id' => '1',
                'created' => '2021-04-14 13:44:09',
                'modified' => '2021-04-14 13:44:09',
            ],
        ];

        $table = $this->table('reservations');
        $table->insert($data)->save();
    }
}
