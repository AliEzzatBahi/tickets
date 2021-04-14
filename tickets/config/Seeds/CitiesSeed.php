<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Cities seed.
 */
class CitiesSeed extends AbstractSeed
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
                'name' => 'Cairo',
                'country_id' => '1',
                'created' => '2021-04-14 08:22:58',
                'modified' => '2021-04-14 08:22:58',
            ],
        ];

        $table = $this->table('cities');
        $table->insert($data)->save();
    }
}
