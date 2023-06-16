<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BecaFixture
 */
class BecaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'beca';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id_beca' => 1,
                'Nombre_Beca' => 'Lorem ipsum dolor ',
                'Categoria' => 'Lorem ipsum dolor ',
                'Descripcion' => 'Lorem ipsum dolor sit amet',
                'Periodo' => 'Lorem ipsum dolor sit amet',
                'Monto' => 1,
                'Duracion_beca' => 'Lorem ipsum dolor sit amet',
                'Pagos' => 1,
            ],
        ];
        parent::init();
    }
}
