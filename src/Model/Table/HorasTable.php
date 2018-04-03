<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Horas Model
 *
 * @property \App\Model\Table\EscalasTable|\Cake\ORM\Association\HasMany $Escalas
 * @property \App\Model\Table\VwAgendamentosTable|\Cake\ORM\Association\HasMany $VwAgendamentos
 *
 * @method \App\Model\Entity\Hora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hora|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hora findOrCreate($search, callable $callback = null, $options = [])
 */
class HorasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('horas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Escalas', [
            'foreignKey' => 'hora_id'
        ]);
        $this->hasMany('VwAgendamentos', [
            'foreignKey' => 'hora_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 5)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome')
            ->add('nome', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['nome']));

        return $rules;
    }
}
