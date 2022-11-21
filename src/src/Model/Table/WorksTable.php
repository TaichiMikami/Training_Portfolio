<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Works Model
 *
 * @method \App\Model\Entity\Work newEmptyEntity()
 * @method \App\Model\Entity\Work newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Work[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Work get($primaryKey, $options = [])
 * @method \App\Model\Entity\Work findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Work patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Work[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Work|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Work saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Work[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Work[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Work[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Work[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class WorksTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);
        //DBのテーブルを指定
        $this->setTable('works');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('artist')
            ->maxLength('artist', 255)
            ->requirePresence('artist', 'create')
            ->notEmptyString('artist');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        return $validator;
    }
}
