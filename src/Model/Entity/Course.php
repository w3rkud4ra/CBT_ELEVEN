<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $level_id
 *
 * @property \App\Model\Entity\Level $level
 * @property \App\Model\Entity\Exam[] $exams
 * @property \App\Model\Entity\QuestionCourse[] $question_courses
 * @property \App\Model\Entity\Question[] $questions
 * @property \App\Model\Entity\TeacherCourse[] $teacher_courses
 */
class Course extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'created' => true,
        'modified' => true,
        'level_id' => true,
        'level' => true,
        'exams' => true,
        'question_courses' => true,
        'questions' => true,
        'teacher_courses' => true
    ];
}
