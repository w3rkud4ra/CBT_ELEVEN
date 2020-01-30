<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Teacher Entity
 *
 * @property int $id
 * @property int $nip
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\QuestionCourse[] $question_courses
 * @property \App\Model\Entity\TeacherCourse[] $teacher_courses
 */
class Teacher extends Entity
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
        'nip' => true,
        'name' => true,
        'email' => true,
        'phone' => true,
        'address' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'user' => true,
        'question_courses' => true,
        'teacher_courses' => true
    ];
}
