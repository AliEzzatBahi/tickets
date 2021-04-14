<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * AdditionalFees seed.
 */
class AdditionalFeesSeed extends AbstractSeed
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
                'name' => 'F03',
                'description' => 'This is description',
                'total_price' => '2300',
                'event_id' => '1',
                'created' => '2021-04-14 08:26:36',
                'modified' => '2021-04-14 08:26:36',
            ],
        ];

        $table = $this->table('additional_fees');
        $table->insert($data)->save();
    }
}
