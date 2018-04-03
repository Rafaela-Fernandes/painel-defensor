<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AssistidosFixture
 *
 */
class AssistidosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'pessoa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'numero_triagem' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'dados_completos' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '1 = Dados Completos, 0 = Dados Incompletos', 'precision' => null, 'autoIncrement' => null],
        'funcionario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'unidade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dt_cadastro' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'pessoa_id' => ['type' => 'index', 'columns' => ['pessoa_id'], 'length' => []],
            'funcionario_id' => ['type' => 'index', 'columns' => ['funcionario_id'], 'length' => []],
            'unidade_id' => ['type' => 'index', 'columns' => ['unidade_id'], 'length' => []],
            'idx_triagem' => ['type' => 'index', 'columns' => ['numero_triagem'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'assistidos_ibfk_1' => ['type' => 'foreign', 'columns' => ['pessoa_id'], 'references' => ['pessoas', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'assistidos_ibfk_2' => ['type' => 'foreign', 'columns' => ['funcionario_id'], 'references' => ['funcionarios', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'assistidos_ibfk_3' => ['type' => 'foreign', 'columns' => ['unidade_id'], 'references' => ['unidades', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'pessoa_id' => 1,
            'numero_triagem' => 'Lorem ipsum d',
            'dados_completos' => 1,
            'funcionario_id' => 1,
            'unidade_id' => 1,
            'dt_cadastro' => 1520347547
        ],
    ];
}
