<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PriceDetails Model
 *
 * @property \App\Model\Table\EventsTable&\Cake\ORM\Association\BelongsTo $Events
 * @property \App\Model\Table\TicketTypesTable&\Cake\ORM\Association\BelongsTo $TicketTypes
 * @property \App\Model\Table\ReservationDetailsTable&\Cake\ORM\Association\HasMany $ReservationDetails
 *
 * @method \App\Model\Entity\PriceDetail newEmptyEntity()
 * @method \App\Model\Entity\PriceDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PriceDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PriceDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\PriceDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PriceDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PriceDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PriceDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PriceDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PriceDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PriceDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PriceDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PriceDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PriceDetailsTable extends Table
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

        $this->setTable('price_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Events', [
            'foreignKey' => 'event_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('TicketTypes', [
            'foreignKey' => 'ticket_type_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('ReservationDetails', [
            'foreignKey' => 'price_detail_id',
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
            ->date('date_from')
            ->requirePresence('date_from', 'create')
            ->notEmptyDate('date_from');

        $validator
            ->date('date_to')
            ->requirePresence('date_to', 'create')
            ->notEmptyDate('date_to');

        $validator
            ->time('time')
            ->requirePresence('time', 'create')
            ->notEmptyTime('time');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->integer('min_seats_number')
            ->requirePresence('min_seats_number', 'create')
            ->notEmptyString('min_seats_number');

        $validator
            ->integer('max_seats_num')
            ->requirePresence('max_seats_num', 'create')
            ->notEmptyString('max_seats_num');

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
        $rules->add($rules->existsIn(['event_id'], 'Events'), ['errorField' => 'event_id']);
        $rules->add($rules->existsIn(['ticket_type_id'], 'TicketTypes'), ['errorField' => 'ticket_type_id']);

        return $rules;
    }
}
