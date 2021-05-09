<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $info
 * @property string $image_folder
 * @property float $lat
 * @property float $lng
 * @property string $address
 * @property bool $is_hot
 * @property string $video
 * @property int $city_id
 * @property int $country_id
 * @property int $category_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\AdditionalFee[] $additional_fees
 * @property \App\Model\Entity\PriceDetail[] $price_details
 */
class Event extends Entity
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

    protected $_virtual = ['images'];
    
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'info' => true,
        'image_folder' => true,
        'lat' => true,
        'lng' => true,
        'address' => true,
        'is_hot' => true,
        'video' => true,
        'city_id' => true,
        'country_id' => true,
        'category_id' => true,
        'created' => true,
        'modified' => true,
        'city' => true,
        'country' => true,
        'category' => true,
        'additional_fees' => true,
        'ticket_types' => true,
    ];

    protected function _getImages()
    {
        $image_folder = ROOT.'/webroot/responsive_filemanager/source/events/' . $this->image_folder;
        $folder_URL = BASE_URL.'/responsive_filemanager/source/events/' . $this->image_folder;
        
        $file_list = array();
        if ($handle = opendir($image_folder)) {

            while ($entry = readdir($handle)) {
                if($entry == '.' || $entry == '..'){

                }else{
                    $file_list[] = $folder_URL.'/'.$entry;
                }
            }
            closedir($handle);
        }
        return  $file_list;
    }
}
