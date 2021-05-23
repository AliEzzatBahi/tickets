<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * PriceDetails seed.
 */
class PriceDetailsSeed extends AbstractSeed
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
                'date_from' => '2021-08-01',
                'date_to' => '2021-08-04',
                'time' => '15:27:00',
                'price' => '2300',
                'vat' => '15',
                'is_vat' => '1',
                'min_seats_number' => '3',
                'max_seats_number' => '10',
                'event_id' => '1',
                'ticket_type_id' => '1',
                'created' => '2021-04-14 08:28:04',
                'modified' => '2021-05-08 14:51:13',
            ],
            [
                'id' => '2',
                'date_from' => '2021-08-05',
                'date_to' => '2021-08-06',
                'time' => '10:27:00',
                'price' => '4500',
                'vat' => '15',
                'is_vat' => '1',
                'min_seats_number' => '3',
                'max_seats_number' => '10',
                'event_id' => '1',
                'ticket_type_id' => '2',
                'created' => '2021-04-14 08:28:04',
                'modified' => '2021-05-08 14:51:13',
            ],
            [
                'id' => '3',
                'date_from' => '2021-05-08',
                'date_to' => '2021-08-09',
                'time' => '10:27:00',
                'price' => '7200',
                'vat' => '15',
                'is_vat' => '1',
                'min_seats_number' => '3',
                'max_seats_number' => '10',
                'event_id' => '3',
                'ticket_type_id' => '3',
                'created' => '2021-04-14 08:28:04',
                'modified' => '2021-05-07 14:22:49',
            ],
            [
                'id' => '4',
                'date_from' => '2021-05-07',
                'date_to' => '2021-04-14',
                'time' => '10:27:00',
                'price' => '2300',
                'vat' => '0',
                'is_vat' => '0',
                'min_seats_number' => '3',
                'max_seats_number' => '10',
                'event_id' => '2',
                'ticket_type_id' => '1',
                'created' => '2021-04-14 08:28:04',
                'modified' => '2021-05-07 11:22:34',
            ],
            [
                'id' => '5',
                'date_from' => '2021-04-14',
                'date_to' => '2021-04-14',
                'time' => '10:27:00',
                'price' => '2300',
                'vat' => '0',
                'is_vat' => '0',
                'min_seats_number' => '3',
                'max_seats_number' => '10',
                'event_id' => '3',
                'ticket_type_id' => '1',
                'created' => '2021-04-14 08:28:04',
                'modified' => '2021-05-07 11:22:34',
            ],
            [
                'id' => '6',
                'date_from' => '2021-04-14',
                'date_to' => '2021-04-14',
                'time' => '10:27:00',
                'price' => '2300',
                'vat' => '0',
                'is_vat' => '0',
                'min_seats_number' => '3',
                'max_seats_number' => '10',
                'event_id' => '2',
                'ticket_type_id' => '1',
                'created' => '2021-04-14 08:28:04',
                'modified' => '2021-05-07 11:22:34',
            ],
            [
                'id' => '7',
                'date_from' => '2021-04-14',
                'date_to' => '2021-04-14',
                'time' => '10:27:00',
                'price' => '2300',
                'vat' => '0',
                'is_vat' => '0',
                'min_seats_number' => '3',
                'max_seats_number' => '10',
                'event_id' => '2',
                'ticket_type_id' => '1',
                'created' => '2021-04-14 08:28:04',
                'modified' => '2021-05-07 11:22:34',
            ],
            [
                'id' => '8',
                'date_from' => '2021-04-14',
                'date_to' => '2021-04-14',
                'time' => '10:27:00',
                'price' => '2300',
                'vat' => '0',
                'is_vat' => '0',
                'min_seats_number' => '3',
                'max_seats_number' => '10',
                'event_id' => '2',
                'ticket_type_id' => '1',
                'created' => '2021-04-14 08:28:04',
                'modified' => '2021-05-07 11:22:34',
            ],
        ];

        $table = $this->table('price_details');
        $table->insert($data)->save();
    }
}
