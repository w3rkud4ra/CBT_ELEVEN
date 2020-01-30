<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QuestionCourse Entity
 *
 * @property int $id
 * @property string $tahun_ajaran
 * @property int $total_question
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $teacher_id
 * @property int|null $course_id
 *
 * @property \App\Model\Entity\Teacher $teacher
 * @property \App\Model\Entity\Course $course
 */
class QuestionCourse extends Entity
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
        'tahun_ajaran' => true,
        'total_question' => true,
        'created' => true,
        'modified' => true,
        'teacher_id' => true,
        'course_id' => true,
        'teacher' => true,
        'course' => true
    ];
}
