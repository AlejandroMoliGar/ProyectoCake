<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfoPersonalFixture
 */
class InfoPersonalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'info_personal';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id_Personal' => 1,
                'Nombre' => 'Lorem ipsum dolor ',
                'Apellido_Paterno' => 'Lorem ipsum dolor ',
                'Apellido_Materno' => 'Lorem ipsum dolor ',
                'Telefono' => 'Lorem ipsum d',
                'Correo_electronico' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
