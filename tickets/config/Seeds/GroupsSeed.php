<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Groups seed.
 */
class GroupsSeed extends AbstractSeed
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
                'name' => 'Admins',
                'created' => '2021-04-14 08:22:38',
                'modified' => '2021-04-14 08:22:38',
            ],
        ];

        $table = $this->table('groups');
        $table->insert($data)->save();
    }
}
