<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Events seed.
 */
class EventsSeed extends AbstractSeed
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
                'name' => 'Event Name',
                'description' => 'This is description',
                'info' => 'This is info',
                'image_folder' => '#',
                'lat' => '12.13',
                'lng' => '13.12',
                'address' => '10 Street',
                'is_hot' => '1',
                'video' => '#',
                'city_id' => '1',
                'country_id' => '1',
                'category_id' => '1',
                'created' => '2021-04-15 08:09:15',
                'modified' => '2021-04-15 08:09:15',
            ],
        ];

        $table = $this->table('events');
        $table->insert($data)->save();
    }
}
