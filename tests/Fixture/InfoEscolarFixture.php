<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfoEscolarFixture
 */
class InfoEscolarFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'info_escolar';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'No_Control' => 1,
                'semestre' => 'Lorem ipsum dolor sit amet',
                'carreras' => 'Lorem ipsum dolor sit amet',
                'Promedio_Escolar' => 1,
                'Id_Personal' => 1,
            ],
        ];
        parent::init();
    }
}
