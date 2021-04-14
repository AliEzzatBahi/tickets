<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ReservationDetail Entity
 *
 * @property int $id
 * @property int $seats_num
 * @property int $reservation_id
 * @property int $price_detail_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Reservation $reservation
 * @property \App\Model\Entity\PriceDetail $price_detail
 */
class ReservationDetail extends Entity
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
        'seats_num' => true,
        'reservation_id' => true,
        'price_detail_id' => true,
        'created' => true,
        'modified' => true,
        'reservation' => true,
        'price_detail' => true,
    ];
}
