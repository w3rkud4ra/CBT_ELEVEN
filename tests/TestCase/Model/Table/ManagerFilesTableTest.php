<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ManagerFilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ManagerFilesTable Test Case
 */
class ManagerFilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ManagerFilesTable
     */
    public $ManagerFiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ManagerFiles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ManagerFiles') ? [] : ['className' => ManagerFilesTable::class];
        $this->ManagerFiles = TableRegistry::getTableLocator()->get('ManagerFiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ManagerFiles);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
