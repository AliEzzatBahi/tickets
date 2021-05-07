<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'first_name' => 'Ali',
                'last_name' => 'Ezzat',
                'address' => '123 Street',
                'phone' => '0123456789',
                'email' => 'a@a.com',
                'password' => '$2y$10$bWbG1o0aOhYJIlmzesfAoeZt18QyADG4MIr0Qo6zMRmRs/ocsdeni',
                'gender' => 'Male',
                'image' => '#',
                'group_id' => '1',
                'country_id' => '1',
                'city_id' => '1',
                'created' => '2021-04-14 08:24:31',
                'modified' => '2021-04-14 08:24:31',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
