<?php
declare(strict_types=1);

namespace App\Model\Entity;

use App\Model\Table\WorksTable;
use Cake\ORM\Entity;

class Work extends Entity
{
    protected $_accessible = [
        'artist' => true,
        'title' => true,
        'type' => true,
        'mastering' => true,
        'display' => true,
        'link' => true,
    ];

    public function getTypeText()
    {
        return WorksTable::TYPE_LIST[$this->type];
    }

    public function getMasteringText()
    {
        return WorksTable::MASTERING_TEXT[$this->mastering];
    }

    public function getMasteringStatus()
    {
        return WorksTable::MASTERING_STATUS[$this->mastering];
    }

    public function getDisplayStatus()
    {
        return WorksTable::DISPLAY_STATUS[$this->display];
    }
}
