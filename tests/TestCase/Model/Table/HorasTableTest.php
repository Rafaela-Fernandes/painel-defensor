<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HorasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HorasTable Test Case
 */
class HorasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HorasTable
     */
    public $Horas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.horas',
        'app.escalas',
        'app.dias',
        'app.agendamentos_temp',
        'app.agendas',
        'app.agendamentos',
        'app.assistidos',
        'app.pessoas',
        'app.contatos',
        'app.enderecos',
        'app.usuarios',
        'app.coletivos',
        'app.coletivos_pessoas',
        'app.dependentes',
        'app.familiares',
        'app.funcionarios',
        'app.partes',
        'app.pessoa_fisicas',
        'app.pessoa_juridicas',
        'app.plantao_atendimentos',
        'app.plantao_atendimentos_pessoas',
        'app.rc_trabalhos',
        'app.registros',
        'app.testemunhas',
        'app.trabalhos',
        'app.vw_assistidos',
        'app.vw_funcionarios',
        'app.contas',
        'app.contas_pessoas',
        'app.unidades',
        'app.acoes',
        'app.assistencia_presos',
        'app.atendimentos',
        'app.audiencias',
        'app.civeis',
        'app.conciliacoes',
        'app.crimes',
        'app.curadorias',
        'app.direito_humanos',
        'app.documentos',
        'app.execucao_penais',
        'app.familias',
        'app.fazenda_publicas',
        'app.fila_senhas',
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
        'app.processos',
        'app.relacionamentos',
        'app.saudes',
        'app.sociais',
        'app.unidade_moveis',
        'app.vw_atendimento',
        'app.vw_agendamentos',
        'app.vw_atendimentos',
        'app.vw_crc_atendimentos',
        'app.vw_senhas',
        'app.vwextrato',
        'app.anexos',
        'app.anexos_assistidos',
        'app.assistidos_dependentes',
        'app.assistidos_partes',
        'app.assistidos_plantao_atendimentos',
        'app.tipo_doencas',
        'app.assistidos_tipo_doencas',
        'app.tipo_acoes',
        'app.processos_tipo_acoes',
        'app.tipo_documentos',
        'app.tipo_acoes_tipo_documentos',
        'app.unidade_moveis_tipo_acoes',
        'app.especializadas',
        'app.atuacaos',
        'app.tipo_agendamentos',
        'app.comarcas',
        'app.salas',
        'app.historicos',
        'app.plantoes',
        'app.atuacoes',
        'app.escalas_atuacoes',
        'app.escalas_funcionarios',
        'app.escalas_salas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Horas') ? [] : ['className' => HorasTable::class];
        $this->Horas = TableRegistry::get('Horas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Horas);

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
