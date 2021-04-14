<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PriceDetail Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date
 * @property \Cake\I18n\FrozenTime $time
 * @property float $price
 * @property int $min_seats_number
 * @property int $max_seats_num
 * @property int $event_id
 * @property string $ticket_type_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\TicketType $ticket_type
 * @property \App\Model\Entity\ReservationDetail[] $reservation_details
 */
class PriceDetail extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'date' => true,
        'time' => true,
        'price' => true,
        'min_seats_number' => true,
        'max_seats_num' => true,
        'event_id' => true,
        'ticket_type_id' => true,
        'created' => true,
        'modified' => true,
        'event' => true,
        'ticket_type' => true,
        'reservation_details' => true,
    ];
}
