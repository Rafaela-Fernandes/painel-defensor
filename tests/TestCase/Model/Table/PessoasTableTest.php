<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PessoasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PessoasTable Test Case
 */
class PessoasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PessoasTable
     */
    public $Pessoas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pessoas',
        'app.contatos',
        'app.enderecos',
        'app.usuarios',
        'app.assistidos',
        'app.funcionarios',
        'app.unidades',
        'app.acoes',
        'app.agendamentos',
        'app.tipo_acoes',
        'app.agendas',
        'app.escalas',
        'app.vw_agendamentos',
        'app.especializadas',
        'app.processos',
        'app.atuacaos',
        'app.tipo_agendamentos',
        'app.comarcas',
        'app.salas',
        'app.conciliacoes',
        'app.fila_senhas',
        'app.historicos',
        'app.assistencia_presos',
        'app.atendimentos',
        'app.audiencias',
        'app.civeis',
        'app.crimes',
        'app.curadorias',
        'app.direito_humanos',
        'app.documentos',
        'app.execucao_penais',
        'app.familias',
        'app.fazenda_publicas',
        'app.filas',
        'app.flagrantes',
        'app.fundiarios',
        'app.assistidos_fundiarios',
        'app.idosos',
        'app.instancia_superior_civeis',
        'app.juizado_criminais',
        'app.juizado_especial_civeis',
        'app.juventude_civeis',
        'app.juventudes',
        'app.nucleo_mulheres',
        'app.pa_acolhidos',
        'app.pa_acolhimentos',
        'app.pa_historicos',
        'app.populacao_ruas',
        'app.processo_administrativos',
        'app.relacionamentos',
        'app.saudes',
        'app.sociais',
        'app.unidade_moveis',
        'app.vw_atendimento',
        'app.vw_atendimentos',
        'app.vw_crc_atendimentos',
        'app.vw_senhas',
        'app.vwextrato',
        'app.anexos',
        'app.anexos_assistidos',
        'app.dependentes',
        'app.assistidos_dependentes',
        'app.partes',
        'app.assistidos_partes',
        'app.plantao_atendimentos',
        'app.assistidos_plantao_atendimentos',
        'app.tipo_doencas',
        'app.assistidos_tipo_doencas',
        'app.coletivos',
        'app.coletivos_pessoas',
        'app.familiares',
        'app.pessoa_fisicas',
        'app.pessoa_juridicas',
        'app.plantao_atendimentos_pessoas',
        'app.rc_trabalhos',
        'app.registros',
        'app.testemunhas',
        'app.trabalhos',
        'app.vw_assistidos',
        'app.vw_funcionarios',
        'app.contas',
        'app.contas_pessoas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pessoas') ? [] : ['className' => PessoasTable::class];
        $this->Pessoas = TableRegistry::get('Pessoas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pessoas);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
