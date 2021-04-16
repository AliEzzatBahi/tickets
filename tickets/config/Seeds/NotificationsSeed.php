<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Notifications seed.
 */
class NotificationsSeed extends AbstractSeed
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
                'notification' => 'This is notification message',
                'user_id' => '1',
                'created' => '2021-04-16 15:59:49',
                'modified' => '2021-04-16 15:59:49',
            ],
        ];

        $table = $this->table('notifications');
        $table->insert($data)->save();
    }
}
