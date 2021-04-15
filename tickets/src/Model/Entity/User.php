<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property string $gender
 * @property string $image
 * @property int $group_id
 * @property int $country_id
 * @property int $city_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class User extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'address' => true,
        'phone' => true,
        'email' => true,
        'password' => true,
        'gender' => true,
        'image' => true,
        'group_id' => true,
        'country_id' => true,
        'city_id' => true,
        'created' => true,
        'modified' => true,
        'group' => true,
        'country' => true,
        'city' => true,
        'reservations' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
