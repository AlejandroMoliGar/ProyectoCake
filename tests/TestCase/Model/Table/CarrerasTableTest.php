<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarrerasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarrerasTable Test Case
 */
class CarrerasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarrerasTable
     */
    protected $Carreras;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Carreras',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Carreras') ? [] : ['className' => CarrerasTable::class];
        $this->Carreras = $this->getTableLocator()->get('Carreras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Carreras);

        parent::tearDown();
    }
}
