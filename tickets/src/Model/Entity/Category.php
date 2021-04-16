<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image_folder
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Event[] $events
 */
class Category extends Entity
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
        'name' => true,
        'description' => true,
        'image_folder' => true,
        'created' => true,
        'modified' => true,
        'events' => true,
    ];

    // A virtual field for category images
    protected function _getImages()
    {
        $image_folder = ROOT.'/webroot/responsive_filemanager/source/categories/' . $this->image_folder;
        $folder_URL = ROOT_URL.'/webroot/responsive_filemanager/source/categories/' . $this->image_folder;
        
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
