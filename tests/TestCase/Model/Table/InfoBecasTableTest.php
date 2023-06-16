<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfoBecasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfoBecasTable Test Case
 */
class InfoBecasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfoBecasTable
     */
    protected $InfoBecas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.InfoBecas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('InfoBecas') ? [] : ['className' => InfoBecasTable::class];
        $this->InfoBecas = $this->getTableLocator()->get('InfoBecas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->InfoBecas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfoBecasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
