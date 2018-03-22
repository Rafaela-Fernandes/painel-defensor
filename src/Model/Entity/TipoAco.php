<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TipoAco Entity
 *
 * @property int $id
 * @property string $nome
 *
 * @property \App\Model\Entity\Processo[] $processos
 * @property \App\Model\Entity\TipoDocumento[] $tipo_documentos
 * @property \App\Model\Entity\UnidadeMovei[] $unidade_moveis
 */
class TipoAco extends Entity
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
        'nome' => true,
        'processos' => true,
        'tipo_documentos' => true,
        'unidade_moveis' => true
    ];
}
