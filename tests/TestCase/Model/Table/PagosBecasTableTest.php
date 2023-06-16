<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagosBecasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagosBecasTable Test Case
 */
class PagosBecasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PagosBecasTable
     */
    protected $PagosBecas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.PagosBecas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PagosBecas') ? [] : ['className' => PagosBecasTable::class];
        $this->PagosBecas = $this->getTableLocator()->get('PagosBecas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PagosBecas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PagosBecasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
