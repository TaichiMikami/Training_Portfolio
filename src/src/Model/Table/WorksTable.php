<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class WorksTable extends Table
{
    // type
    const TYPE_VOMIX = 1;
    const TYPE_PARAMIX = 2;

    const TYPE_LIST = [
        self::TYPE_VOMIX => "VoMix",
        self::TYPE_PARAMIX => "ParaMix"
    ];

    // mastering
    const MASTERING_DID = 1;
    const MASTERING_NOT = 2;

    const MASTERING_TEXT = [
        self::MASTERING_DID => " . Mastering",
        self::MASTERING_NOT => ""
    ];

    const MASTERING_STATUS = [
        self::MASTERING_DID => "DID", 
        self::MASTERING_NOT => "NOT"
    ];

    // display
    const DISPLAY_ON = 1;
    const DISPLAY_OFF = 2;

    const DISPLAY_STATUS = [
        1 => "ON",
        2 => "OFF",
    ];

    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('works');
        $this->setPrimaryKey('id');
        $this->setDisplayField('title');
    }

    public function getList()
    {
       return $this->find()->where(["display" => self::DISPLAY_ON]); 
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('artist')
            ->maxLength('artist', 255)
            ->notEmptyString('artist');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->notEmptyString('title');

        $validator
            ->integer('type')
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->integer('mastering')
            ->requirePresence('mastering', 'create')
            ->notEmptyString('mastering');

        $validator
            ->integer('display')
            ->requirePresence('display', 'create')
            ->notEmptyString('display');

        $validator
            ->scalar('link')
            ->maxLength('link', 255)
            ->notEmptyString('link');

        return $validator;
    }
}
