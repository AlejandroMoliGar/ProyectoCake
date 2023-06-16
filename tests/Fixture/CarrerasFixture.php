<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarrerasFixture
 */
class CarrerasFixture extends TestFixture
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
                'carreras' => 'e6ea6208-7ee9-41c2-a562-a311b32bc305',
            ],
        ];
        parent::init();
    }
}
