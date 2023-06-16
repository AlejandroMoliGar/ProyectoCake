<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InfoPersonal Entity
 *
 * @property int $Id_Personal
 * @property string $Nombre
 * @property string $Apellido_Paterno
 * @property string $Apellido_Materno
 * @property string $Telefono
 * @property string $Correo_electronico
 */
class InfoPersonal extends Entity
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
        'Nombre' => true,
        'Apellido_Paterno' => true,
        'Apellido_Materno' => true,
        'Telefono' => true,
        'Correo_electronico' => true,
    ];
}
