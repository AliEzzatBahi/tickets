<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
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
                'name' => 'Arabic Egyptian',
                'description' => 'This is description',
                'image_folder' => '1234567',
                'created' => '2021-04-14 08:25:17',
                'modified' => '2021-04-14 08:25:17',
            ],
        ];

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
