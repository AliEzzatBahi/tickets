<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TicketTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TicketTypesTable Test Case
 */
class TicketTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TicketTypesTable
     */
    protected $TicketTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TicketTypes',
        'app.PriceDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TicketTypes') ? [] : ['className' => TicketTypesTable::class];
        $this->TicketTypes = $this->getTableLocator()->get('TicketTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TicketTypes);

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
}
