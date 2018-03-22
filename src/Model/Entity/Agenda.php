<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agenda Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $data
 * @property int $escala_id
 *
 * @property \App\Model\Entity\Escala $escala
 * @property \App\Model\Entity\Agendamento[] $agendamentos
 * @property \App\Model\Entity\VwAgendamento[] $vw_agendamentos
 */
class Agenda extends Entity
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
        'data' => true,
        'escala_id' => true,
        'escala' => true,
        'agendamentos' => true,
        'vw_agendamentos' => true
    ];
}
