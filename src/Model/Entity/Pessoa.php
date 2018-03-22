<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $contato_id
 * @property int $endereco_id
 * @property int $usuario_id
 * @property string $tipo
 * @property string $observacao
 * @property \Cake\I18n\FrozenTime $data_cadastro
 * @property string $representante
 *
 * @property \App\Model\Entity\Contato $contato
 * @property \App\Model\Entity\Endereco $endereco
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Assistido[] $assistidos
 * @property \App\Model\Entity\Coletivo[] $coletivos
 * @property \App\Model\Entity\Dependente[] $dependentes
 * @property \App\Model\Entity\Familiare[] $familiares
 * @property \App\Model\Entity\Funcionario[] $funcionarios
 * @property \App\Model\Entity\Parte[] $partes
 * @property \App\Model\Entity\PessoaFisica[] $pessoa_fisicas
 * @property \App\Model\Entity\PessoaJuridica[] $pessoa_juridicas
 * @property \App\Model\Entity\PlantaoAtendimento[] $plantao_atendimentos
 * @property \App\Model\Entity\RcTrabalho[] $rc_trabalhos
 * @property \App\Model\Entity\Registro[] $registros
 * @property \App\Model\Entity\Testemunha[] $testemunhas
 * @property \App\Model\Entity\Trabalho[] $trabalhos
 * @property \App\Model\Entity\VwAssistido[] $vw_assistidos
 * @property \App\Model\Entity\VwFuncionario[] $vw_funcionarios
 * @property \App\Model\Entity\Conta[] $contas
 */
class Pessoa extends Entity
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
        'contato_id' => true,
        'endereco_id' => true,
        'usuario_id' => true,
        'tipo' => true,
        'observacao' => true,
        'data_cadastro' => true,
        'representante' => true,
        'contato' => true,
        'endereco' => true,
        'usuario' => true,
        'assistidos' => true,
        'coletivos' => true,
        'dependentes' => true,
        'familiares' => true,
        'funcionarios' => true,
        'partes' => true,
        'pessoa_fisicas' => true,
        'pessoa_juridicas' => true,
        'plantao_atendimentos' => true,
        'rc_trabalhos' => true,
        'registros' => true,
        'testemunhas' => true,
        'trabalhos' => true,
        'vw_assistidos' => true,
        'vw_funcionarios' => true,
        'contas' => true
    ];
}
