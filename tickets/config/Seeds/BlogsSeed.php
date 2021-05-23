<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Blogs seed.
 */
class BlogsSeed extends AbstractSeed
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
                'title' => 'Post Title 1',
                'post' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => '#',
                'user_id' => '1',
                'created' => '2021-04-14 08:24:31',
                'modified' => '2021-04-14 08:24:31',
            ],
            [
                'id' => '2',
                'title' => 'Post Title 2',
                'post' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => '#',
                'user_id' => '1',
                'created' => '2021-04-14 08:24:31',
                'modified' => '2021-04-14 08:24:31',
            ],
            [
                'id' => '3',
                'title' => 'Post Title 3',
                'post' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => '#',
                'user_id' => '1',
                'created' => '2021-04-14 08:24:31',
                'modified' => '2021-04-14 08:24:31',
            ],
            [
                'id' => '4',
                'title' => 'Post Title 4',
                'post' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => '#',
                'user_id' => '1',
                'created' => '2021-04-14 08:24:31',
                'modified' => '2021-04-14 08:24:31',
            ],
            [
                'id' => '5',
                'title' => 'Post Title 5',
                'post' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => '#',
                'user_id' => '1',
                'created' => '2021-04-14 08:24:31',
                'modified' => '2021-04-14 08:24:31',
            ],
            [
                'id' => '6',
                'title' => 'Post Title 6',
                'post' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => '#',
                'user_id' => '1',
                'created' => '2021-04-14 08:24:31',
                'modified' => '2021-04-14 08:24:31',
            ],
        ];

        $table = $this->table('blogs');
        $table->insert($data)->save();
    }
}
