<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PriceDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PriceDetailsTable Test Case
 */
class PriceDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PriceDetailsTable
     */
    protected $PriceDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PriceDetails',
        'app.Events',
        'app.TicketTypes',
        'app.ReservationDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PriceDetails') ? [] : ['className' => PriceDetailsTable::class];
        $this->PriceDetails = $this->getTableLocator()->get('PriceDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PriceDetails);

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
