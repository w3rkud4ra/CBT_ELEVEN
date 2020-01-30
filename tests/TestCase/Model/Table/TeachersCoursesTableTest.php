<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeachersCoursesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeachersCoursesTable Test Case
 */
class TeachersCoursesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TeachersCoursesTable
     */
    public $TeachersCourses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TeachersCourses',
        'app.Teachers',
        'app.Courses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TeachersCourses') ? [] : ['className' => TeachersCoursesTable::class];
        $this->TeachersCourses = TableRegistry::getTableLocator()->get('TeachersCourses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeachersCourses);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
