<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BecaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BecaTable Test Case
 */
class BecaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BecaTable
     */
    protected $Beca;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Beca',
        'app.Pagos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Beca') ? [] : ['className' => BecaTable::class];
        $this->Beca = $this->getTableLocator()->get('Beca', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Beca);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BecaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
