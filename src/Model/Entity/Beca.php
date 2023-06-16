<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Beca Entity
 *
 * @property int $Id_beca
 * @property string $Nombre_Beca
 * @property string $Categoria
 * @property string $Descripcion
 * @property string $Periodo
 * @property int $Monto
 * @property string $Duracion_beca
 * @property int|null $Pagos
 *
 * @property \App\Model\Entity\Pago[] $pagos
 */
class Beca extends Entity
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
        'Nombre_Beca' => true,
        'Categoria' => true,
        'Descripcion' => true,
        'Periodo' => true,
        'Monto' => true,
        'Duracion_beca' => true,
        'Pagos' => true,
        'pagos' => true,
    ];
}
