<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agendamento Entity
 *
 * @property int $id
 * @property int $assistido_id
 * @property int $tipo_acao_id
 * @property int $agenda_id
 * @property int $funcionario_id
 * @property int $especializada_id
 * @property string $observacao
 * @property int $acao_id
 * @property int $processo_id
 * @property int $atuacao_id
 * @property int $agendamento_id
 * @property int $tipo_agendamento_id
 * @property int $comarca_id
 * @property int $unidade_id
 * @property int $sala_id
 * @property int $conciliacao_id
 * @property \Cake\I18n\FrozenDate $prazo
 * @property int $tipo_atendimento
 * @property \Cake\I18n\FrozenDate $data_cadastro
 * @property int $prioridade
 * @property \Cake\I18n\FrozenTime $dt_cadastro
 *
 * @property \App\Model\Entity\Assistido $assistido
 * @property \App\Model\Entity\TipoAco $tipo_aco
 * @property \App\Model\Entity\Agenda $agenda
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Especializada $especializada
 * @property \App\Model\Entity\Aco $aco
 * @property \App\Model\Entity\Processo $processo
 * @property \App\Model\Entity\Atuacao $atuacao
 * @property \App\Model\Entity\Agendamento[] $agendamentos
 * @property \App\Model\Entity\TipoAgendamento $tipo_agendamento
 * @property \App\Model\Entity\Comarca $comarca
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\Sala $sala
 * @property \App\Model\Entity\Conciliaco $conciliaco
 * @property \App\Model\Entity\FilaSenha[] $fila_senhas
 * @property \App\Model\Entity\Historico[] $historicos
 */
class Agendamento extends Entity
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
        'assistido_id' => true,
        'tipo_acao_id' => true,
        'agenda_id' => true,
        'funcionario_id' => true,
        'especializada_id' => true,
        'observacao' => true,
        'acao_id' => true,
        'processo_id' => true,
        'atuacao_id' => true,
        'agendamento_id' => true,
        'tipo_agendamento_id' => true,
        'comarca_id' => true,
        'unidade_id' => true,
        'sala_id' => true,
        'conciliacao_id' => true,
        'prazo' => true,
        'tipo_atendimento' => true,
        'data_cadastro' => true,
        'prioridade' => true,
        'dt_cadastro' => true,
        'assistido' => true,
        'tipo_aco' => true,
        'agenda' => true,
        'funcionario' => true,
        'especializada' => true,
        'aco' => true,
        'processo' => true,
        'atuacao' => true,
        'agendamentos' => true,
        'tipo_agendamento' => true,
        'comarca' => true,
        'unidade' => true,
        'sala' => true,
        'conciliaco' => true,
        'fila_senhas' => true,
        'historicos' => true
    ];
}
