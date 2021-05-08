<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * TicketTypes seed.
 */
class TicketTypesSeed extends AbstractSeed
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
                'name' => 'VIP/Regular',
                'description' => 'This is description',
                'created' => '2021-04-14 08:27:44',
                'modified' => '2021-05-08 14:51:13',
            ],
            [
                'id' => '2',
                'name' => 'Gold/Regular',
                'description' => 'This is description',
                'created' => '2021-04-14 08:27:44',
                'modified' => '2021-05-08 14:51:13',
            ],
            [
                'id' => '3',
                'name' => 'Silver/Regular',
                'description' => 'This is description',
                'created' => '2021-04-14 08:27:44',
                'modified' => '2021-05-07 14:22:49',
            ],
        ];

        $table = $this->table('ticket_types');
        $table->insert($data)->save();
    }
}
