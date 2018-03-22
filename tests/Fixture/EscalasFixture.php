<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EscalasFixture
 *
 */
class EscalasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'dia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'hora_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'dia_id' => ['type' => 'index', 'columns' => ['dia_id'], 'length' => []],
            'hora_id' => ['type' => 'index', 'columns' => ['hora_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'unico' => ['type' => 'unique', 'columns' => ['dia_id', 'hora_id'], 'length' => []],
            'escalas_ibfk_1' => ['type' => 'foreign', 'columns' => ['dia_id'], 'references' => ['dias', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'escalas_ibfk_2' => ['type' => 'foreign', 'columns' => ['hora_id'], 'references' => ['horas', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'dia_id' => 1,
            'hora_id' => 1
        ],
    ];
}
