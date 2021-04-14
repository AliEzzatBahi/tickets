<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReservationDetails Model
 *
 * @property \App\Model\Table\ReservationsTable&\Cake\ORM\Association\BelongsTo $Reservations
 * @property \App\Model\Table\PriceDetailsTable&\Cake\ORM\Association\BelongsTo $PriceDetails
 *
 * @method \App\Model\Entity\ReservationDetail newEmptyEntity()
 * @method \App\Model\Entity\ReservationDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ReservationDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ReservationDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\ReservationDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ReservationDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ReservationDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ReservationDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReservationDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReservationDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ReservationDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ReservationDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ReservationDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ReservationDetailsTable extends Table
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

        $this->setTable('reservation_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Reservations', [
            'foreignKey' => 'reservation_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('PriceDetails', [
            'foreignKey' => 'price_detail_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('seats_num')
            ->requirePresence('seats_num', 'create')
            ->notEmptyString('seats_num');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['reservation_id'], 'Reservations'), ['errorField' => 'reservation_id']);
        $rules->add($rules->existsIn(['price_detail_id'], 'PriceDetails'), ['errorField' => 'price_detail_id']);

        return $rules;
    }
}
