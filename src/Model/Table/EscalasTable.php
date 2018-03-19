<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Escalas Model
 *
 * @property \App\Model\Table\DiasTable|\Cake\ORM\Association\BelongsTo $Dias
 * @property \App\Model\Table\HorasTable|\Cake\ORM\Association\BelongsTo $Horas
 * @property \App\Model\Table\AgendamentosTempTable|\Cake\ORM\Association\HasMany $AgendamentosTemp
 * @property \App\Model\Table\AgendasTable|\Cake\ORM\Association\HasMany $Agendas
 * @property \App\Model\Table\PlantoesTable|\Cake\ORM\Association\HasMany $Plantoes
 * @property \App\Model\Table\VwAgendamentosTable|\Cake\ORM\Association\HasMany $VwAgendamentos
 * @property \App\Model\Table\AtuacoesTable|\Cake\ORM\Association\BelongsToMany $Atuacoes
 * @property \App\Model\Table\FuncionariosTable|\Cake\ORM\Association\BelongsToMany $Funcionarios
 * @property \App\Model\Table\SalasTable|\Cake\ORM\Association\BelongsToMany $Salas
 *
 * @method \App\Model\Entity\Escala get($primaryKey, $options = [])
 * @method \App\Model\Entity\Escala newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Escala[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Escala|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escala patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Escala[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Escala findOrCreate($search, callable $callback = null, $options = [])
 */
class EscalasTable extends Table
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

        $this->setTable('escalas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Dias', [
            'foreignKey' => 'dia_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Horas', [
            'foreignKey' => 'hora_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AgendamentosTemp', [
            'foreignKey' => 'escala_id'
        ]);
        $this->hasMany('Agendas', [
            'foreignKey' => 'escala_id'
        ]);
        $this->hasMany('Plantoes', [
            'foreignKey' => 'escala_id'
        ]);
        $this->hasMany('VwAgendamentos', [
            'foreignKey' => 'escala_id'
        ]);
        $this->belongsToMany('Atuacoes', [
            'foreignKey' => 'escala_id',
            'targetForeignKey' => 'atuaco_id',
            'joinTable' => 'escalas_atuacoes'
        ]);
        $this->belongsToMany('Funcionarios', [
            'foreignKey' => 'escala_id',
            'targetForeignKey' => 'funcionario_id',
            'joinTable' => 'escalas_funcionarios'
        ]);
        $this->belongsToMany('Salas', [
            'foreignKey' => 'escala_id',
            'targetForeignKey' => 'sala_id',
            'joinTable' => 'escalas_salas'
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
        $rules->add($rules->existsIn(['dia_id'], 'Dias'));
        $rules->add($rules->existsIn(['hora_id'], 'Horas'));

        return $rules;
    }
}
