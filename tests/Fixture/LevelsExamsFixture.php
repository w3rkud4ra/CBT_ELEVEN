<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LevelsExamsFixture
 */
class LevelsExamsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'levels_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'examsid' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'examsid' => ['type' => 'index', 'columns' => ['examsid'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['levels_id', 'examsid'], 'length' => []],
            'levels_exams_ibfk_1' => ['type' => 'foreign', 'columns' => ['examsid'], 'references' => ['exams', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'levels_exams_ibfk_2' => ['type' => 'foreign', 'columns' => ['levels_id'], 'references' => ['levels', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'levels_id' => 1,
                'examsid' => 1
            ],
        ];
        parent::init();
    }
}
