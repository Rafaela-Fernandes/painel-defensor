<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pessoas Model
 *
 * @property \App\Model\Table\ContatosTable|\Cake\ORM\Association\BelongsTo $Contatos
 * @property \App\Model\Table\EnderecosTable|\Cake\ORM\Association\BelongsTo $Enderecos
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\AssistidosTable|\Cake\ORM\Association\HasMany $Assistidos
 * @property \App\Model\Table\ColetivosTable|\Cake\ORM\Association\HasMany $Coletivos
 * @property \App\Model\Table\DependentesTable|\Cake\ORM\Association\HasMany $Dependentes
 * @property \App\Model\Table\FamiliaresTable|\Cake\ORM\Association\HasMany $Familiares
 * @property \App\Model\Table\FuncionariosTable|\Cake\ORM\Association\HasMany $Funcionarios
 * @property \App\Model\Table\PartesTable|\Cake\ORM\Association\HasMany $Partes
 * @property \App\Model\Table\PessoaFisicasTable|\Cake\ORM\Association\HasMany $PessoaFisicas
 * @property \App\Model\Table\PessoaJuridicasTable|\Cake\ORM\Association\HasMany $PessoaJuridicas
 * @property \App\Model\Table\PlantaoAtendimentosTable|\Cake\ORM\Association\HasMany $PlantaoAtendimentos
 * @property \App\Model\Table\RcTrabalhosTable|\Cake\ORM\Association\HasMany $RcTrabalhos
 * @property \App\Model\Table\RegistrosTable|\Cake\ORM\Association\HasMany $Registros
 * @property \App\Model\Table\TestemunhasTable|\Cake\ORM\Association\HasMany $Testemunhas
 * @property \App\Model\Table\TrabalhosTable|\Cake\ORM\Association\HasMany $Trabalhos
 * @property \App\Model\Table\VwAssistidosTable|\Cake\ORM\Association\HasMany $VwAssistidos
 * @property \App\Model\Table\VwFuncionariosTable|\Cake\ORM\Association\HasMany $VwFuncionarios
 * @property \App\Model\Table\ColetivosTable|\Cake\ORM\Association\BelongsToMany $Coletivos
 * @property \App\Model\Table\ContasTable|\Cake\ORM\Association\BelongsToMany $Contas
 * @property \App\Model\Table\PlantaoAtendimentosTable|\Cake\ORM\Association\BelongsToMany $PlantaoAtendimentos
 *
 * @method \App\Model\Entity\Pessoa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pessoa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pessoa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pessoa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa findOrCreate($search, callable $callback = null, $options = [])
 */
class PessoasTable extends Table
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

        $this->setTable('pessoas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Contatos', [
            'foreignKey' => 'contato_id'
        ]);
        $this->belongsTo('Enderecos', [
            'foreignKey' => 'endereco_id'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Assistidos', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Coletivos', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Dependentes', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Familiares', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Funcionarios', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Partes', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('PessoaFisicas', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('PessoaJuridicas', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('PlantaoAtendimentos', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('RcTrabalhos', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Registros', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Testemunhas', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Trabalhos', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('VwAssistidos', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('VwFuncionarios', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->belongsToMany('Coletivos', [
            'foreignKey' => 'pessoa_id',
            'targetForeignKey' => 'coletivo_id',
            'joinTable' => 'coletivos_pessoas'
        ]);
        $this->belongsToMany('Contas', [
            'foreignKey' => 'pessoa_id',
            'targetForeignKey' => 'conta_id',
            'joinTable' => 'contas_pessoas'
        ]);
        $this->belongsToMany('PlantaoAtendimentos', [
            'foreignKey' => 'pessoa_id',
            'targetForeignKey' => 'plantao_atendimento_id',
            'joinTable' => 'plantao_atendimentos_pessoas'
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
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 1)
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->scalar('observacao')
            ->allowEmpty('observacao');

        $validator
            ->dateTime('data_cadastro')
            ->allowEmpty('data_cadastro');

        $validator
            ->scalar('representante')
            ->maxLength('representante', 200)
            ->allowEmpty('representante');

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
        $rules->add($rules->existsIn(['contato_id'], 'Contatos'));
        $rules->add($rules->existsIn(['endereco_id'], 'Enderecos'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));

        return $rules;
    }
}
