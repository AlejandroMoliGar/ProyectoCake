<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfoPersonalTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfoPersonalTable Test Case
 */
class InfoPersonalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfoPersonalTable
     */
    protected $InfoPersonal;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.InfoPersonal',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('InfoPersonal') ? [] : ['className' => InfoPersonalTable::class];
        $this->InfoPersonal = $this->getTableLocator()->get('InfoPersonal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->InfoPersonal);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfoPersonalTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
