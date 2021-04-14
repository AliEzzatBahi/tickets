<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property int $price_detail_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\PriceDetail $price_detail
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\ReservationDetail[] $reservation_details
 */
class Reservation extends Entity
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
        'price_detail_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'price_detail' => true,
        'user' => true,
        'reservation_details' => true,
    ];
}
