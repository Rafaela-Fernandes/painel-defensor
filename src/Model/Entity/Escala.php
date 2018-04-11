<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Escala Entity
 *
 * @property int $id
 * @property int $dia_id
 * @property int $hora_id
 *
 * @property \App\Model\Entity\Dia $dia
 * @property \App\Model\Entity\Hora $hora
 * @property \App\Model\Entity\AgendamentosTemp[] $agendamentos_temp
 * @property \App\Model\Entity\Agenda[] $agendas
 * @property \App\Model\Entity\Planto[] $plantoes
 * @property \App\Model\Entity\VwAgendamento[] $vw_agendamentos
 * @property \App\Model\Entity\Atuaco[] $atuacoes
 * @property \App\Model\Entity\Funcionario[] $funcionarios
 * @property \App\Model\Entity\Sala[] $salas
 */
class Escala extends Entity
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
        'dia_id' => true,
        'hora_id' => true,
        'dia' => true,
        'hora' => true,
        'agendamentos_temp' => true,
        'agendas' => true,
        'plantoes' => true,
        'vw_agendamentos' => true,
        'atuacoes' => true,
        'funcionarios' => true,
        'salas' => true
    ];
}
