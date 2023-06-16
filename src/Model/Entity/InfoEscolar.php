<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InfoEscolar Entity
 *
 * @property int $No_Control
 * @property string $semestre
 * @property string $carreras
 * @property float $Promedio_Escolar
 * @property int $Id_Personal
 */
class InfoEscolar extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'semestre' => true,
        'carreras' => true,
        'Promedio_Escolar' => true,
        'Id_Personal' => true,
    ];
}
