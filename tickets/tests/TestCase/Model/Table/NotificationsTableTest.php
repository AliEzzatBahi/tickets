<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotificationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotificationsTable Test Case
 */
class NotificationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotificationsTable
     */
    protected $Notifications;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Notifications',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Notifications') ? [] : ['className' => NotificationsTable::class];
        $this->Notifications = $this->getTableLocator()->get('Notifications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Notifications);

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
