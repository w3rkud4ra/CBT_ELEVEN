<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeacherCoursesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeacherCoursesTable Test Case
 */
class TeacherCoursesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TeacherCoursesTable
     */
    public $TeacherCourses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TeacherCourses',
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
        $config = TableRegistry::getTableLocator()->exists('TeacherCourses') ? [] : ['className' => TeacherCoursesTable::class];
        $this->TeacherCourses = TableRegistry::getTableLocator()->get('TeacherCourses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeacherCourses);

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
