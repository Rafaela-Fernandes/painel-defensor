<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoAcoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoAcoesTable Test Case
 */
class TipoAcoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoAcoesTable
     */
    public $TipoAcoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_acoes',
        'app.processos',
        'app.processos_tipo_acoes',
        'app.tipo_documentos',
        'app.tipo_acoes_tipo_documentos',
        'app.unidade_moveis',
        'app.unidade_moveis_tipo_acoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoAcoes') ? [] : ['className' => TipoAcoesTable::class];
        $this->TipoAcoes = TableRegistry::get('TipoAcoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoAcoes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
