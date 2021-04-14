<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReservationDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReservationDetailsTable Test Case
 */
class ReservationDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReservationDetailsTable
     */
    protected $ReservationDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ReservationDetails',
        'app.Reservations',
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
        $config = $this->getTableLocator()->exists('ReservationDetails') ? [] : ['className' => ReservationDetailsTable::class];
        $this->ReservationDetails = $this->getTableLocator()->get('ReservationDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ReservationDetails);

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
