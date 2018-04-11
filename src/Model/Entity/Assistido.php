<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Assistido Entity
 *
 * @property int $id
 * @property int $pessoa_id
 * @property string $numero_triagem
 * @property int $dados_completos
 * @property int $funcionario_id
 * @property int $unidade_id
 * @property \Cake\I18n\FrozenTime $dt_cadastro
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\Aco[] $acoes
 * @property \App\Model\Entity\Agendamento[] $agendamentos
 * @property \App\Model\Entity\AssistenciaPreso[] $assistencia_presos
 * @property \App\Model\Entity\Atendimento[] $atendimentos
 * @property \App\Model\Entity\Audiencia[] $audiencias
 * @property \App\Model\Entity\Civei[] $civeis
 * @property \App\Model\Entity\Conciliaco[] $conciliacoes
 * @property \App\Model\Entity\Crime[] $crimes
 * @property \App\Model\Entity\Curadoria[] $curadorias
 * @property \App\Model\Entity\DireitoHumano[] $direito_humanos
 * @property \App\Model\Entity\Documento[] $documentos
 * @property \App\Model\Entity\ExecucaoPenai[] $execucao_penais
 * @property \App\Model\Entity\Familia[] $familias
 * @property \App\Model\Entity\FazendaPublica[] $fazenda_publicas
 * @property \App\Model\Entity\FilaSenha[] $fila_senhas
 * @property \App\Model\Entity\Fila[] $filas
 * @property \App\Model\Entity\Flagrante[] $flagrantes
 * @property \App\Model\Entity\Fundiario[] $fundiarios
 * @property \App\Model\Entity\Idoso[] $idosos
 * @property \App\Model\Entity\InstanciaSuperiorCivei[] $instancia_superior_civeis
 * @property \App\Model\Entity\JuizadoCriminai[] $juizado_criminais
 * @property \App\Model\Entity\JuizadoEspecialCivei[] $juizado_especial_civeis
 * @property \App\Model\Entity\JuventudeCivei[] $juventude_civeis
 * @property \App\Model\Entity\Juventude[] $juventudes
 * @property \App\Model\Entity\NucleoMulhere[] $nucleo_mulheres
 * @property \App\Model\Entity\PaAcolhido[] $pa_acolhidos
 * @property \App\Model\Entity\PaAcolhimento[] $pa_acolhimentos
 * @property \App\Model\Entity\PaHistorico[] $pa_historicos
 * @property \App\Model\Entity\PopulacaoRua[] $populacao_ruas
 * @property \App\Model\Entity\ProcessoAdministrativo[] $processo_administrativos
 * @property \App\Model\Entity\Processo[] $processos
 * @property \App\Model\Entity\Relacionamento[] $relacionamentos
 * @property \App\Model\Entity\Saude[] $saudes
 * @property \App\Model\Entity\Sociai[] $sociais
 * @property \App\Model\Entity\UnidadeMovei[] $unidade_moveis
 * @property \App\Model\Entity\VwAtendimento[] $vw_atendimento
 * @property \App\Model\Entity\VwAgendamento[] $vw_agendamentos
 * @property \App\Model\Entity\VwAtendimento[] $vw_atendimentos
 * @property \App\Model\Entity\VwCrcAtendimento[] $vw_crc_atendimentos
 * @property \App\Model\Entity\VwSenha[] $vw_senhas
 * @property \App\Model\Entity\Vwextrato[] $vwextrato
 * @property \App\Model\Entity\Anexo[] $anexos
 * @property \App\Model\Entity\Dependente[] $dependentes
 * @property \App\Model\Entity\Parte[] $partes
 * @property \App\Model\Entity\PlantaoAtendimento[] $plantao_atendimentos
 * @property \App\Model\Entity\TipoDoenca[] $tipo_doencas
 */
class Assistido extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'pessoa_id' => true,
        'numero_triagem' => true,
        'dados_completos' => true,
        'funcionario_id' => true,
        'unidade_id' => true,
        'dt_cadastro' => true,
        'pessoa' => true,
        'funcionario' => true,
        'unidade' => true,
        'acoes' => true,
        'agendamentos' => true,
        'assistencia_presos' => true,
        'atendimentos' => true,
        'audiencias' => true,
        'civeis' => true,
        'conciliacoes' => true,
        'crimes' => true,
        'curadorias' => true,
        'direito_humanos' => true,
        'documentos' => true,
        'execucao_penais' => true,
        'familias' => true,
        'fazenda_publicas' => true,
        'fila_senhas' => true,
        'filas' => true,
        'flagrantes' => true,
        'fundiarios' => true,
        'idosos' => true,
        'instancia_superior_civeis' => true,
        'juizado_criminais' => true,
        'juizado_especial_civeis' => true,
        'juventude_civeis' => true,
        'juventudes' => true,
        'nucleo_mulheres' => true,
        'pa_acolhidos' => true,
        'pa_acolhimentos' => true,
        'pa_historicos' => true,
        'populacao_ruas' => true,
        'processo_administrativos' => true,
        'processos' => true,
        'relacionamentos' => true,
        'saudes' => true,
        'sociais' => true,
        'unidade_moveis' => true,
        'vw_atendimento' => true,
        'vw_agendamentos' => true,
        'vw_atendimentos' => true,
        'vw_crc_atendimentos' => true,
        'vw_senhas' => true,
        'vwextrato' => true,
        'anexos' => true,
        'dependentes' => true,
        'partes' => true,
        'plantao_atendimentos' => true,
        'tipo_doencas' => true
    ];
}
