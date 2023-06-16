<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SemestreFixture
 */
class SemestreFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'semestre';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Semestre' => 'c3e1bfc0-b2c5-40ed-b576-9a766de9d1f6',
            ],
        ];
        parent::init();
    }
}
