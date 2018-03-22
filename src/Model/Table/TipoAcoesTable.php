<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoAcoes Model
 *
 * @property \App\Model\Table\ProcessosTable|\Cake\ORM\Association\BelongsToMany $Processos
 * @property \App\Model\Table\TipoDocumentosTable|\Cake\ORM\Association\BelongsToMany $TipoDocumentos
 * @property \App\Model\Table\UnidadeMoveisTable|\Cake\ORM\Association\BelongsToMany $UnidadeMoveis
 *
 * @method \App\Model\Entity\TipoAco get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoAco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoAco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoAco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoAco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoAco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoAco findOrCreate($search, callable $callback = null, $options = [])
 */
class TipoAcoesTable extends Table
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

        $this->setTable('tipo_acoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Processos', [
            'foreignKey' => 'tipo_aco_id',
            'targetForeignKey' => 'processo_id',
            'joinTable' => 'processos_tipo_acoes'
        ]);
        $this->belongsToMany('TipoDocumentos', [
            'foreignKey' => 'tipo_aco_id',
            'targetForeignKey' => 'tipo_documento_id',
            'joinTable' => 'tipo_acoes_tipo_documentos'
        ]);
        $this->belongsToMany('UnidadeMoveis', [
            'foreignKey' => 'tipo_aco_id',
            'targetForeignKey' => 'unidade_movei_id',
            'joinTable' => 'unidade_moveis_tipo_acoes'
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

        return $validator;
    }
}
