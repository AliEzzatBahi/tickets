<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdditionalFeesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdditionalFeesTable Test Case
 */
class AdditionalFeesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdditionalFeesTable
     */
    protected $AdditionalFees;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AdditionalFees',
        'app.Events',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AdditionalFees') ? [] : ['className' => AdditionalFeesTable::class];
        $this->AdditionalFees = $this->getTableLocator()->get('AdditionalFees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AdditionalFees);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
