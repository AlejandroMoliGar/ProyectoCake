<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfoEscolarTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfoEscolarTable Test Case
 */
class InfoEscolarTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfoEscolarTable
     */
    protected $InfoEscolar;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.InfoEscolar',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('InfoEscolar') ? [] : ['className' => InfoEscolarTable::class];
        $this->InfoEscolar = $this->getTableLocator()->get('InfoEscolar', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->InfoEscolar);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfoEscolarTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\InfoEscolarTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
