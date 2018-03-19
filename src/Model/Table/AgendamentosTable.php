<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agendamentos Model
 *
 * @property \App\Model\Table\AssistidosTable|\Cake\ORM\Association\BelongsTo $Assistidos
 * @property \App\Model\Table\TipoAcoesTable|\Cake\ORM\Association\BelongsTo $TipoAcoes
 * @property \App\Model\Table\AgendasTable|\Cake\ORM\Association\BelongsTo $Agendas
 * @property \App\Model\Table\FuncionariosTable|\Cake\ORM\Association\BelongsTo $Funcionarios
 * @property \App\Model\Table\EspecializadasTable|\Cake\ORM\Association\BelongsTo $Especializadas
 * @property \App\Model\Table\AcoesTable|\Cake\ORM\Association\BelongsTo $Acoes
 * @property \App\Model\Table\ProcessosTable|\Cake\ORM\Association\BelongsTo $Processos
 * @property \App\Model\Table\AtuacaosTable|\Cake\ORM\Association\BelongsTo $Atuacaos
 * @property \App\Model\Table\AgendamentosTable|\Cake\ORM\Association\BelongsTo $Agendamentos
 * @property \App\Model\Table\TipoAgendamentosTable|\Cake\ORM\Association\BelongsTo $TipoAgendamentos
 * @property \App\Model\Table\ComarcasTable|\Cake\ORM\Association\BelongsTo $Comarcas
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\BelongsTo $Unidades
 * @property \App\Model\Table\SalasTable|\Cake\ORM\Association\BelongsTo $Salas
 * @property \App\Model\Table\ConciliacoesTable|\Cake\ORM\Association\BelongsTo $Conciliacoes
 * @property \App\Model\Table\AgendamentosTable|\Cake\ORM\Association\HasMany $Agendamentos
 * @property \App\Model\Table\FilaSenhasTable|\Cake\ORM\Association\HasMany $FilaSenhas
 * @property \App\Model\Table\HistoricosTable|\Cake\ORM\Association\HasMany $Historicos
 *
 * @method \App\Model\Entity\Agendamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agendamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Agendamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agendamento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agendamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agendamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agendamento findOrCreate($search, callable $callback = null, $options = [])
 */
class AgendamentosTable extends Table
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

        $this->setTable('agendamentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Assistidos', [
            'foreignKey' => 'assistido_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TipoAcoes', [
            'foreignKey' => 'tipo_acao_id'
        ]);
        $this->belongsTo('Agendas', [
            'foreignKey' => 'agenda_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Funcionarios', [
            'foreignKey' => 'funcionario_id'
        ]);
        $this->belongsTo('Especializadas', [
            'foreignKey' => 'especializada_id'
        ]);
        $this->belongsTo('Acoes', [
            'foreignKey' => 'acao_id'
        ]);
        $this->belongsTo('Processos', [
            'foreignKey' => 'processo_id'
        ]);
        $this->belongsTo('Atuacaos', [
            'foreignKey' => 'atuacao_id'
        ]);
        $this->belongsTo('Agendamentos', [
            'foreignKey' => 'agendamento_id'
        ]);
        $this->belongsTo('TipoAgendamentos', [
            'foreignKey' => 'tipo_agendamento_id'
        ]);
        $this->belongsTo('Comarcas', [
            'foreignKey' => 'comarca_id'
        ]);
        $this->belongsTo('Unidades', [
            'foreignKey' => 'unidade_id'
        ]);
        $this->belongsTo('Salas', [
            'foreignKey' => 'sala_id'
        ]);
        $this->belongsTo('Conciliacoes', [
            'foreignKey' => 'conciliacao_id'
        ]);
        $this->hasMany('Agendamentos', [
            'foreignKey' => 'agendamento_id'
        ]);
        $this->hasMany('FilaSenhas', [
            'foreignKey' => 'agendamento_id'
        ]);
        $this->hasMany('Historicos', [
            'foreignKey' => 'agendamento_id'
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
            ->scalar('observacao')
            ->allowEmpty('observacao');

        $validator
            ->date('prazo')
            ->allowEmpty('prazo');

        $validator
            ->integer('tipo_atendimento')
            ->requirePresence('tipo_atendimento', 'create')
            ->notEmpty('tipo_atendimento');

        $validator
            ->date('data_cadastro')
            ->allowEmpty('data_cadastro');

        $validator
            ->integer('prioridade')
            ->allowEmpty('prioridade');

        $validator
            ->dateTime('dt_cadastro')
            ->requirePresence('dt_cadastro', 'create')
            ->notEmpty('dt_cadastro');

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
        $rules->add($rules->existsIn(['assistido_id'], 'Assistidos'));
        $rules->add($rules->existsIn(['tipo_acao_id'], 'TipoAcoes'));
        $rules->add($rules->existsIn(['agenda_id'], 'Agendas'));
        $rules->add($rules->existsIn(['funcionario_id'], 'Funcionarios'));
        $rules->add($rules->existsIn(['especializada_id'], 'Especializadas'));
        $rules->add($rules->existsIn(['acao_id'], 'Acoes'));
        $rules->add($rules->existsIn(['processo_id'], 'Processos'));
        $rules->add($rules->existsIn(['atuacao_id'], 'Atuacaos'));
        $rules->add($rules->existsIn(['agendamento_id'], 'Agendamentos'));
        $rules->add($rules->existsIn(['tipo_agendamento_id'], 'TipoAgendamentos'));
        $rules->add($rules->existsIn(['comarca_id'], 'Comarcas'));
        $rules->add($rules->existsIn(['unidade_id'], 'Unidades'));
        $rules->add($rules->existsIn(['sala_id'], 'Salas'));
        $rules->add($rules->existsIn(['conciliacao_id'], 'Conciliacoes'));

        return $rules;
    }

    public function findByDefensor(Query $query, Array $options)
    {
        return $query
            ->hydrate(false)
            ->innerJoinWith('Agendas')
            ->innerJoinWith('TipoAcoes')
            ->join([
                'Assistidos' => [
                    'table' => 'assistidos',
                    'type' => 'INNER',
                    'conditions' => 'Assistidos.id = Agendamentos.assistido_id'
                ],
                'p' => [
                    'table' => 'pessoas',
                    'type' => 'INNER',
                    'conditions' => 'p.id = Assistidos.pessoa_id',
                ]
            ])
            ->where([
                'Agendas.data' => 'CURDATE()',
                'Agendamentos.funcionario_id' => $options['funcionario_id']
            ]);
    }
}
