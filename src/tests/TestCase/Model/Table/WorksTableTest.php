<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorksTable Test Case
 */
class WorksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WorksTable
     */
    protected $Works;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Works',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Works') ? [] : ['className' => WorksTable::class];
        $this->Works = $this->getTableLocator()->get('Works', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Works);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WorksTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
