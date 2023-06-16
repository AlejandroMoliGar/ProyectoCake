<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PagosBecasFixture
 */
class PagosBecasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id_Pagos' => 1,
                'SI' => 'Lorem ipsum dolor ',
                'NO' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
