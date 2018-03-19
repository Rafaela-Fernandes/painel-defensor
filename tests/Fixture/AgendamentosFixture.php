<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AgendamentosFixture
 *
 */
class AgendamentosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'assistido_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_acao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'agenda_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'funcionario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'especializada_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observacao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'acao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'processo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'atuacao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'agendamento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_agendamento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'comarca_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'unidade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sala_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'conciliacao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'prazo' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'tipo_atendimento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_cadastro' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'prioridade' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dt_cadastro' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'agenda_id' => ['type' => 'index', 'columns' => ['agenda_id'], 'length' => []],
            'funcionario_id' => ['type' => 'index', 'columns' => ['funcionario_id'], 'length' => []],
            'assistido_id' => ['type' => 'index', 'columns' => ['assistido_id'], 'length' => []],
            'tipo_acao_id' => ['type' => 'index', 'columns' => ['tipo_acao_id'], 'length' => []],
            'acao_id' => ['type' => 'index', 'columns' => ['acao_id'], 'length' => []],
            'processo_id' => ['type' => 'index', 'columns' => ['processo_id'], 'length' => []],
            'agendamento_id' => ['type' => 'index', 'columns' => ['agendamento_id'], 'length' => []],
            'especializada_id' => ['type' => 'index', 'columns' => ['especializada_id'], 'length' => []],
            'comarca_id' => ['type' => 'index', 'columns' => ['comarca_id'], 'length' => []],
            'unidade_id' => ['type' => 'index', 'columns' => ['unidade_id'], 'length' => []],
            'sala_id' => ['type' => 'index', 'columns' => ['sala_id'], 'length' => []],
            'conciliacao_id' => ['type' => 'index', 'columns' => ['conciliacao_id'], 'length' => []],
            'atuacao_id' => ['type' => 'index', 'columns' => ['atuacao_id'], 'length' => []],
            'fk_agendamentos_tipo_agendamentos1' => ['type' => 'index', 'columns' => ['tipo_agendamento_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'agendamentos_ibfk_10' => ['type' => 'foreign', 'columns' => ['unidade_id'], 'references' => ['unidades', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'agendamentos_ibfk_11' => ['type' => 'foreign', 'columns' => ['sala_id'], 'references' => ['salas', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'agendamentos_ibfk_12' => ['type' => 'foreign', 'columns' => ['agendamento_id'], 'references' => ['agendamentos', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'agendamentos_ibfk_13' => ['type' => 'foreign', 'columns' => ['comarca_id'], 'references' => ['comarcas', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'agendamentos_ibfk_14' => ['type' => 'foreign', 'columns' => ['conciliacao_id'], 'references' => ['conciliacoes', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'agendamentos_ibfk_3' => ['type' => 'foreign', 'columns' => ['agenda_id'], 'references' => ['agendas', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'agendamentos_ibfk_4' => ['type' => 'foreign', 'columns' => ['funcionario_id'], 'references' => ['funcionarios', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'agendamentos_ibfk_5' => ['type' => 'foreign', 'columns' => ['assistido_id'], 'references' => ['assistidos', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'agendamentos_ibfk_6' => ['type' => 'foreign', 'columns' => ['tipo_acao_id'], 'references' => ['tipo_acoes', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'agendamentos_ibfk_7' => ['type' => 'foreign', 'columns' => ['acao_id'], 'references' => ['acoes', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'agendamentos_ibfk_8' => ['type' => 'foreign', 'columns' => ['processo_id'], 'references' => ['processos', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'agendamentos_ibfk_9' => ['type' => 'foreign', 'columns' => ['especializada_id'], 'references' => ['especializadas', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fk_agendamentos_tipo_agendamentos1' => ['type' => 'foreign', 'columns' => ['tipo_agendamento_id'], 'references' => ['tipo_agendamentos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'assistido_id' => 1,
            'tipo_acao_id' => 1,
            'agenda_id' => 1,
            'funcionario_id' => 1,
            'especializada_id' => 1,
            'observacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'acao_id' => 1,
            'processo_id' => 1,
            'atuacao_id' => 1,
            'agendamento_id' => 1,
            'tipo_agendamento_id' => 1,
            'comarca_id' => 1,
            'unidade_id' => 1,
            'sala_id' => 1,
            'conciliacao_id' => 1,
            'prazo' => '2018-03-05',
            'tipo_atendimento' => 1,
            'data_cadastro' => '2018-03-05',
            'prioridade' => 1,
            'dt_cadastro' => 1520277575
        ],
    ];
}
