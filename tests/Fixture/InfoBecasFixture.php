<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfoBecasFixture
 */
class InfoBecasFixture extends TestFixture
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
                'ID_IBeca' => 1,
                'No_Control' => 1,
                'Id_Personal' => 1,
                'Id_beca' => 1,
            ],
        ];
        parent::init();
    }
}
