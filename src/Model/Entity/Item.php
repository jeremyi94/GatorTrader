<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $category
 * @property string $description
 * @property float $price
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property string $img4
 * @property \Cake\I18n\Time $date_posted
 *
 * @property \App\Model\Entity\User $user
 */
class Item extends Entity
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
        '*' => true,
        'id' => false
    ];
}
