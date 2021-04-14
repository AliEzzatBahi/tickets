<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Countries seed.
 */
class CountriesSeed extends AbstractSeed
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
                'name' => 'Egypt',
                'created' => '2021-04-14 08:22:49',
                'modified' => '2021-04-14 08:22:49',
            ],
        ];

        $table = $this->table('countries');
        $table->insert($data)->save();
    }
}
